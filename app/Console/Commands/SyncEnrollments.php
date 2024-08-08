<?php

namespace App\Console\Commands;

use App\Console\Commands;
use Illuminate\Http\Client\ConnectionException;
use PHPUnit\Event\Runtime\PHP;


class SyncEnrollments extends Commands\BaseCommands
{
    protected $signature = 'sync:enrollments';
    protected $description = 'Command description';

    /**
     * @throws ConnectionException
     */
    public function handle()
    {
        $curriculums = $this->hemisService->curriculumList();
        $count = 1;

        foreach ($curriculums as $curriculum) {
            $courses = @$this->moodleService->findCourseByName('curriculum=' . $curriculum['id'] . ';')['courses'];
            $groups = $this->hemisService->groupList(['_curriculum' => $curriculum['id']]);
            echo "Curriculum {$curriculum['id']} - {$curriculum['name']}\n";
            foreach ($groups as $group) {
                foreach ($courses as $course) {
                    echo $count . "-ADD " . $course['fullname'] . PHP_EOL;
                    $cohortID=$this->moodleService->getCohortByIdNumber($group['idnumber']);
                    if(!array_key_exists('id', $cohortID)) {
                        continue;
                    }
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
