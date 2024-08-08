<?php

namespace App\Console\Commands;

use App\Enums\Functions;
use App\Jobs\SyncFaculties;
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
        SyncFaculties::dispatch();
    }
}
