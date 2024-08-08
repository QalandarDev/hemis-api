<?php

namespace App\Jobs;

use App\Services\HemisService;
use App\Services\MoodleService;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncFaculties implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected HemisService $hemisService;
    protected MoodleService $moodleService;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->hemisService = new HemisService();
        $this->moodleService = new MoodleService();
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws ConnectionException
     */
    public function handle()
    {

        $faculties = $this->hemisService->departmentList([
            '_structure_type' => 11,
            'active' => 1
        ]);
        foreach ($faculties as $faculty) {
            if (!$this->moodleService->findCourseCategories(['name' => $faculty['name']])) {
                $this->moodleService->makeCourseCategories([
                    'name' => $faculty['name'],
                    'description' => $faculty['name'],
                    'idnumber' => $faculty['id'],
                ]);
            }
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
    }
}
