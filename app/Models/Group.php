<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  int $id
 * @property  int contextid
 * @property string $description
 * @property string $descriptionformat
 * @property int $visible
 * @property string $name
 * @property int $idnumber
 * @property int $timecreated
 * @property int $timemodified
 *
 */
class Group extends Model
{

    public $timestamps = false;
    protected $table = 'm_cohort';
    protected $fillable = [
        'id',
        'contextid',
        'description',
        'descriptionformat',
        'visible',
        'name',
        'idnumber',
        'timecreated',
        'timemodified',
    ];

    protected static function boot(): void
    {
        parent::boot();
        self::creating(function (self $model) {
            $model->timecreated = time();
            $model->timemodified = time();
            $model->visible = 1;
            $model->contextid = 1;
            $model->descriptionformat = 1;
            $model->idnumber = $model->id;
        });
    }

}
