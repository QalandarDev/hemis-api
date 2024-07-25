<?php

function getEducationResourcesCount(int $semester, int $subject): int
{
    return count(getHemisRequest("/education/resources", ['subject' => $subject, 'semester' => $semester]));
}

function getEducationResources(int $semester, int $subject)
{
    return getHemisRequest("/education/resources", [ 'subject' => $subject,'semester' => $semester]);
}

function getEducationSubjectList(int $semester)
{
    return getHemisRequest(endpoint: "/education/subject-list", query: ['semester' => $semester]);
}

function makeDashboard($semester = 12, $userid)
{
    $fields = 'id, fullname, shortname';
    $courses = enrol_get_users_courses($userid, true, $fields);
    $courses = array_map(function ($course) {
        return [
            'id' => $course->id,
            'shortname' => $course->shortname,
        ];
    }, $courses);
    $courseId = function ($subject) use ($courses) {
        return @array_values(get_courses_search(['shortname' => "subject=" . $subject . ";"], 'id', 1, 1, $totalcount))[0]->id ?? 0;
    };
    $subjects = getEducationSubjectList($semester);
    $optimizedSubjects = array_map(/**
     * @throws coding_exception
     */ function ($subjectData) use ($semester, $courseId) {
        return [
            'id' => $subjectData['curriculumSubject']['subject']['id'],
            'name' => $subjectData['curriculumSubject']['subject']['name'],
            'total_acload' => $subjectData['curriculumSubject']['total_acload'],
            'subjectType' => $subjectData['curriculumSubject']['subjectType']['name'],
            'credit' => $subjectData['curriculumSubject']['credit'],
            'resources_count' => getEducationResourcesCount($semester, $subjectData['curriculumSubject']['subject']['id']),
            'videos_count'=>count(get_coursemodules_in_course('url',$courseId($subjectData['curriculumSubject']['subject']['id']))),
            'course_id' => $courseId($subjectData['curriculumSubject']['subject']['id']),
        ];
    }, $subjects);
    return $optimizedSubjects;
}


function getEducationSubjects(int $subject, int $semester)
{
    return getHemisRequest(endpoint: "/education/subject", query: ['subject' => $subject, 'semester' => $semester]);
}

function getSemesterCode()
{
    return $_SESSION['HEMIS']['student']['semester']['code'] ?? [];
}

function getHemisRequest($endpoint, $query)
{
    $access_token = $_SESSION['HEMIS']['access_token'];
    if (empty($access_token)) {
        return [];
    }
    $baseUrl = 'https://student.mamunedu.uz/rest/v1';
    $url = $baseUrl . $endpoint . '?' . http_build_query($query);
    $authorization = 'Bearer ' . $access_token;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'accept: application/json',
        'Authorization: ' . $authorization
    ]);
    $response = curl_exec($ch);
    if (!curl_errno($ch)) {
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpcode == 200) {
            $data = json_decode($response, true);
            return $data['data'];
        }
    }
    curl_close($ch);
    return [];
}
