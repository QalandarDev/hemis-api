<?php

namespace App\Console\Commands;

use App\Services\HemisService;
use App\Services\MoodleService;
use Illuminate\Console\Command;

class BaseCommands extends Command
{
    protected $signature = 'sync:info';
    const CREATED = 'created';
    const EXISTS = 'exists';
    const UPDATED = 'updated';
    const DELETED = 'deleted';
    const FAILED = 'failed';
    public array $status = [
        self::CREATED => 0,
        self::EXISTS => 0,
        self::UPDATED => 0,
        self::DELETED => 0,
        self::FAILED => 0,
    ];
    public HemisService $hemisService;
    public MoodleService $moodleService;

    public function __construct()
    {
        parent::__construct();
        $this->hemisService = new HemisService();
        $this->moodleService = new MoodleService();
    }

    public function newStatus(): void
    {
        $this->status = [
            self::CREATED => 0,
            self::EXISTS => 0,
            self::UPDATED => 0,
            self::DELETED => 0,
            self::FAILED => 0,
        ];
    }

    public function output($prefix)
    {
        echo $prefix . PHP_EOL
            . self::CREATED . '=' . $this->status[self::CREATED] . PHP_EOL
            . self::EXISTS . '=' . $this->status[self::EXISTS] . PHP_EOL;
    }
}
