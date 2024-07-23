<?php

namespace App\Console\Commands;

use App\Console\Commands;
use PHPUnit\Event\Runtime\PHP;


class SyncEnrollments extends Commands\BaseCommands
{
    protected $signature = 'sync:enrollments';
    protected $description = 'Command description';

    public function handle()
    {
        $curriculums = $this->hemisService->curriculumList();
        $count = 1;

        foreach ($curriculums as $curriculum) {
            $courses = @$this->moodleService->findCourseByName('curriculum=' . $curriculum['id'] . ';')['courses'];
            $groups = $this->hemisService->groupList(['_curriculum' => $curriculum['id']]);

            foreach ($groups as $group) {
                foreach ($courses as $course) {
                    echo $count . "-ADD " . $course['fullname'] . PHP_EOL;
                    $cohortID=$this->moodleService->getCohortByIdNumber($group['idnumber']);
                    $members = $this->moodleService->getCohortMembers($cohortID['id']);
                    if (!array_key_exists('errorcode', $members)) {
                        //add users to course
                        $this->moodleService->courseAddUsers($course['id'], $members[0]['userids']);
                    }
                    $count++;
                }
            }
        }
    }
}
