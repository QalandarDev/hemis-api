<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Client\ConnectionException;

class SyncSubjects extends BaseCommands
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:subjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws ConnectionException
     */
    public function handle(): void
    {
        $curriculums = $this->hemisService->curriculumList();
        foreach ($curriculums as $curriculum) {
            $courseCategory = $this->moodleService->findCourseCategories(['name' => $curriculum['name']])[0];
            $subjects = $this->hemisService->curriculumSubjectList(['_curriculum' => $curriculum['id']]);
            foreach ($subjects as $subject) {
                if ($this->moodleService->findCourseByName('curriculum=' . $curriculum['id'] . ';' . 'subject=' . $subject['subject']['id'] . ';')['total'] == 0) {
                    $data = $this->moodleService->makeCourse([
                        'fullname' => $subject['subject']['name'],
                        'shortname' => 'curriculum=' . $curriculum['id'] . ';' . 'subject=' . $subject['subject']['id'] . ';',
                        'categoryid' => $courseCategory['id']
                    ]);
                    if (array_key_exists('id', $data)) {
                        echo $subject['subject']['name'] . ' created' . PHP_EOL;
                    }
                } else {
                    echo $subject['subject']['name'] . ' existed' . PHP_EOL;
                }
            }
        }
    }
}
