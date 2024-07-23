<?php

namespace App\Services;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class HemisService
{
    const HEMIS_URL = "https://hemis.mamunedu.uz";
    const API_ENPOINT = "https://student.mamunedu.uz/rest/v1";
    const ADMIN_LOGIN = "otabek_xudaybergenov";
    const ADMIN_PASSWORD = "Atabek5355!";
    const ADMIN_TOKEN = "W_1WTlPLgb67B1KcsIOqhtt6TBEEauVa";

    public function getAll()
    {
        $this->login();
    }

    private function login()
    {

    }

    /**
     * @throws ConnectionException
     */
    public function     groupList($options)
    {

        $items = $this->getFromHemis('/data/group-list', $options);
        $groups = [];
        foreach ($items as $item) {
            $status = 0;
            $names = [
                $item["name"],
                $item['specialty']['code'] . '-' . $item['specialty']['name'],
                $item['educationLang']['name'],
                $item['department']['name']
            ];
            $groups[] = [
                'idnumber' => $item['id'],
                'contextid' => '1',
                'description_format' => '1',
                'visible' => 1,
                'name' => implode(' | ', $names),
                'description' => implode(" <br/> ", $names),
                'status' => $status
            ];
        }
        return $groups;

    }

    private function syncGroups($item, $names): int
    {
        $model = new Group();
        $model->id = $item['id'];
        $model->name = implode(" | ", $names);
        $model->description = implode(" <br/> ", $names);
        if (!Group::query()->where(['id' => $model->id])->exists()) {
            if ($model->save()) {
                return 1;
            }
        }
        return 0;
    }

    /**
     * @throws ConnectionException
     */
    public function studentList(array $query = []): array
    {
        return $this->getFromHemis('/data/student-list', $query);
    }

    /**
     * @throws ConnectionException
     */
    public function departmentList(array $query = []): array
    {
        return $this->getFromHemis('/data/department-list', $query);
    }

    /**
     * @throws ConnectionException
     */
    private function getFromHemis(string $endpoint, array $options = []): array
    {
        if (!array_key_exists('limit', $options)) {
            $options['limit'] = 200;
        }
        $totalCount = 1;
        $page = 1;
        $items = [];
        while (count($items) !== $totalCount) {
            $response = Http::withHeader('Authorization', 'Bearer ' . self::ADMIN_TOKEN)
                ->get(self::API_ENPOINT . $endpoint, array_merge($options, ['page' => $page]))->json();
            $response = $response["data"];
            $pagination = $response['pagination'];
            $items = array_merge($items, $response['items']);
            if ($pagination['totalCount'] != $totalCount) {
                $totalCount = $pagination['totalCount'];
            }
            if ($pagination['pageCount'] != $pagination['page']) {
                $page++;
            }
        }
        return $items;
    }

    /**
     * @throws ConnectionException
     */
    public function curriculumList(array $query = []): array
    {
        return $this->getFromHemis('/data/curriculum-list', $query);
    }

    /**
     * @throws ConnectionException
     */
    public function curriculumSubjectList(array $query = []): array
    {
        return $this->getFromHemis('/data/curriculum-subject-list', $query);
    }
}
