<?php

namespace App\Console\Commands;

use App\Enums\Functions;
use App\Models\Department;
use App\Models\Subject;
use App\Services\MoodleService;
use core_reportbuilder\local\aggregation\count;

class SyncDepartments extends BaseCommands
{
    protected $signature = 'sync:departments';

    protected $description = 'Department sync';

    public function handle()
    {
        $faculties = $this->hemisService->departmentList([
            '_structure_type' => 11,
            'active' => 1
        ]);
        $fakultet = $kafedra = $reja = $fan = $exists = 0;
        foreach ($faculties as $faculty) {

            if (!$this->moodleService->findCourseCategories(['name' => $faculty['name']])) {
                $this->moodleService->makeCourseCategories([
                    'name' => $faculty['name'],
                    'description' => $faculty['name'],
                    'idnumber' => $faculty['id'],
                ]);
            } else {
                $department = $this->moodleService->findCourseCategories(['name' => $faculty['name']])[0];
                $curriculums = $this->hemisService->curriculumList(['_department' => $department['idnumber']]);
                foreach ($curriculums as $curriculum) {
                    if (!$this->moodleService->findCourseCategories(['name' => $curriculum['name']])) {
                        $this->moodleService->makeCourseCategories([
                            'name' => $curriculum['name'],
                            'description' => $curriculum['id'],
                            'parent' => $department['id'],
                        ]);
                    }
                }
            }
//            if (
//                !Department::query()
//                    ->where('idnumber', $faculty['id'])
//                    ->exists()
//            ) {
//                $facultyModel = new Department();
//                $facultyModel->idnumber = $faculty['id'];
//                $facultyModel->description = $facultyModel->name = $faculty['name'];
//                if ($facultyModel->save()) {
//                    $fakultet++;
//                }
//            }
//            $curriculums = $this->hemisService->curriculumList(['_department' => $faculty['id']]);
//            foreach ($curriculums as $curriculum) {
//                if (!Department::query()
//                    ->where('name', $curriculum['name'])
//                    ->exists()) {
//                    $departmentModel = new Department();
//                    $departmentModel->description = $departmentModel->name = $curriculum['name'];
//                    $departmentModel->parent = $faculty['id'];
//                    if ($departmentModel->save()) {
//                        $reja++;
//                        echo $departmentModel->name . "\n";
//                    }
//                }
//                $curriculumId = Department::query()
//                    ->where('name', $curriculum['name'])
//                    ->value('id');
//                $subjects = $this->hemisService->curriculumSubjectList([
//                    '_curriculum' => $curriculum['id'],
//                ]);
//                echo count($subjects) . " subjects\n";
//                foreach ($subjects as $subjectOne) {
//                    $subject = $subjectOne['subject'];
//                    if (!Subject::query()->where([
//                        'subject_id' => $subject['id'],
//                        'curriculum_subject_id' => $subjectOne['id']
//                    ])->exists()) {
//                        $subjectModel = new Subject();
//                        $subjectModel->idnumber = $subjectOne['id'];
//                        $subjectModel->fullname = $subject['name'];
//                        $subjectModel->shortname = $subject['id'] . '_' . $subject['code'] . ':' . $subjectOne['id'];
//                        $subjectModel->category = $curriculumId;
//                        $subjectModel->subject_id = $subject['id'];
//                        $subjectModel->curriculum_subject_id = $subjectOne['id'];
//                        if ($subjectModel->save()) {
//                            $fan++;
//                        }
//                    } else {
//                        $exists++;
//                        echo $subject['id'] . '-' . $subject['name'] . 'Already Exists' . PHP_EOL;
//                    }
//                }
//            }
//        }
//        echo "Kafedra=" . $kafedra . PHP_EOL;
//        echo "Fakultet=" . $fakultet . PHP_EOL;
//        echo "Reja=" . $reja . PHP_EOL;
//        echo "Fan=" . $fan . PHP_EOL;
//        echo "Exists=" . $exists . PHP_EOL;
        }
    }
}
