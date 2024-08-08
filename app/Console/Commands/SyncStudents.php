<?php

namespace App\Console\Commands;

use App\Models\Group;
use App\Models\GroupMembers;
use App\Models\Student;
use Illuminate\Http\Client\ConnectionException;

class SyncStudents extends BaseCommands
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:students';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync students hemis to moodle';

    /**
     * Execute the console command.
     * @throws ConnectionException
     */
    public function handle()
    {
        $curriculums = $this->hemisService->curriculumList();
        $count=0;
        foreach ($curriculums as $curriculum) {
            $groups = $this->hemisService->groupList(['_curriculum' => $curriculum['id']]);
            foreach ($groups as $group) {
                if (!$this->moodleService->getCohortByIdNumber($group['idnumber'])) {
                    dd("Not found ", $group);
                } else {
                    $students = $this->hemisService->studentList(['_group' => $group['idnumber']]);
                    foreach ($students as $student) {
                        if (!$this->moodleService->getStudentByIdNumber($student['student_id_number'])) {
                            $newStudent = $this->moodleService->makeStudent([
                                'idnumber' => $student['student_id_number'],
                                'username' => $student['student_id_number'],
                                'password' => "Qazzaq1!",
                                'firstname' => $student['first_name'],
                                'lastname' => $student['second_name'],
                                'middlename' => $student['third_name'],
                                'email' => $student['student_id_number'] . '@mamunedu.uz',
                            ]);
                        }
                        $ok = $this->moodleService->cohortAddMember(cohort_id_number: $group['idnumber'], username: $student['student_id_number']);
                        if (count($ok['warnings']) == 0) {
                            echo $count++."-Student " . $student['full_name'] . " added".PHP_EOL;
                        }else{
                            echo $count++."-Student " . $student['full_name'] . " already exists".PHP_EOL;
                        }
                    }
                }
                echo "Sleep 1...".PHP_EOL;
            }
            echo "Sleep 2...".PHP_EOL;
        }
    }
}
