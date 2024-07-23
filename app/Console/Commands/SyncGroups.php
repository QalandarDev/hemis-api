<?php

namespace App\Console\Commands;


use Illuminate\Http\Client\ConnectionException;

class SyncGroups extends BaseCommands
{
    protected $signature = 'sync:groups';
    protected $description = 'Sync groups';


    /**
     * @throws ConnectionException
     */
    public function handle(): void
    {
        $curriculums = $this->hemisService->curriculumList();
        foreach ($curriculums as $curriculum) {
            $groups = $this->hemisService->groupList(['_curriculum' => $curriculum['id']]);
            foreach ($groups as $group) {
                if (!$this->moodleService->findCohorts($group['name'])['cohorts']) {
                    $cohort = $this->moodleService->makeCohort([
                        'name' => $group['name'],
                        'idnumber' => $group['idnumber'],
                        'categorytype' => [
                            'type' => 'system',
                            'value' => ''
                        ]
                    ]);
                    echo $group['idnumber']."NEW " . $group['name'] . PHP_EOL;
                } else {
                    echo $group['idnumber']."EXISTS " . $group['name'] . PHP_EOL;
                }
            }
        }
    }
}
