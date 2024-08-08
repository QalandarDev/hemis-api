<?php

namespace App\Services;


use App\Enums\Functions;
use http\Env;
use Illuminate\Support\Facades\Http;

class MoodleService
{
    const PATH = "http://127.0.0.1:9090/";
    const TOKEN = 'e3fec69c6a0c81a9cb91a7c48be487fb';
    const FORMAT = 'json';
    private string $baseurl;

    public function __construct()
    {
        $this->baseurl = self::PATH . '/webservice/rest/server.php';
    }


    public function makeCourse($options): array
    {
        return $this->post(Functions::CREATE_COURSES, 'courses', $options);
    }

    public function findCourseByName(string $name): ?array
    {
        return $this->get(Functions::SEARCH_COURSES, ['criterianame' => 'search', 'criteriavalue' => $name], false);
    }

    public function makeCourseCategories($options): array
    {
        return $this->post(Functions::CREATE_COURSE_CATEGORIES, 'categories', $options);
    }

    public function findCourseCategories($options): array
    {
        return $this->get(Functions::GET_COURSE_CATEGORIES, $options);
    }

    private function get(string $function, array $options = [], $isCriteria = true): array
    {
        return Http::get($this->baseurl, $this->makeCriteria($function, $options, $isCriteria))->json();
    }

    private function post(string $function, string $attribute, array $options = []): array
    {
        return Http::get($this->baseurl, $this->makeAttribute($function, $attribute, $options))->json();
    }

    private function makeCriteria(string $function, $options = [], $isCriteria = true): array
    {
        if ($isCriteria) {
            $criteria = array_map(function ($key, $value) {
                return ['key' => $key, 'value' => $value];
            }, array_keys($options), $options);
            return [
                'wstoken' => self::TOKEN,
                'moodlewsrestformat' => self::FORMAT,
                'wsfunction' => $function,
                'criteria' => $criteria,
            ];
        } else {
            return array_merge([
                'wstoken' => self::TOKEN,
                'moodlewsrestformat' => self::FORMAT,
                'wsfunction' => $function,
            ], $options);
        }


    }

    private function makeAttribute(string $function, $attribute, $options = []): array
    {
        return [
            'wstoken' => self::TOKEN,
            'moodlewsrestformat' => self::FORMAT,
            'wsfunction' => $function,
            $attribute => [$options],
        ];
    }

    public function findCohorts(string $query): array
    {
        return $this->get(Functions::SEARCH_COHORTS, ['query' => $query, 'context[contextid]' => 1, 'context[contextlevel]' => '', 'context[instanceid]' => 1], false);
    }

    public function getCohortByIdNumber(string $idNumber): array
    {
        $cohorts = $this->findCohorts($idNumber)['cohorts'];
        $filteredCohorts = array_values(array_filter($cohorts, function ($cohort) use ($idNumber) {
            return $cohort['idnumber'] == $idNumber;
        }));
        return count($filteredCohorts) >= 1 ? $cohorts[0] : ['idnumber' => $idNumber];
    }

    public function makeCohort(array $options): array
    {
        return $this->post(Functions::CREATE_COHORTS, 'cohorts', $options);
    }

    public function getStudentByIdNumber(int $idNumber): array
    {
        return $this->get(Functions::SEARCH_USERS, ['field' => 'idnumber', 'values[0]' => $idNumber], false);
    }

    public function makeStudent(array $array)
    {
        return $this->post(Functions::CREATE_USERS, 'users', $array);
    }

    public function cohortAddMember($cohort_id_number, $username)
    {
        return $this->post(Functions::COHORT_ADD_MEMBERS, 'members', [
            'cohorttype' => [
                'type' => 'idnumber',
                'value' => $cohort_id_number,
            ],
            'usertype' => [
                'type' => 'username',
                'value' => $username,
            ]
        ]);
    }

    public function getCohortMembers(mixed $idnumber): array
    {
        return $this->get(Functions::GET_COHORT_MEMBERS, ['cohortids[0]' => $idnumber], false);
    }

    public function courseAddUsers(mixed $id, mixed $userids): void
    {
        $params = [
            'moodlewsrestformat' => self::FORMAT,
            'wstoken' => self::TOKEN,
            'wsfunction' => Functions::ENROLL_USER_COURSE
        ];
        foreach ($userids as $index => $userid) {
            $params["enrolments[$index][userid]"] = $userid;
            $params["enrolments[$index][roleid]"] = 5;
            $params["enrolments[$index][courseid]"] = $id;
        }
        Http::get($this->baseurl, $params);
    }
}
