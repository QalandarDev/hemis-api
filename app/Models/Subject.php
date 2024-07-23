<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property int $category
 * @property int $sortorder
 * @property string $fullname
 * @property string $shortname
 * @property int $idnumber
 * @property string $summary
 * @property int $startdate
 * @property int $enddate
 * @property int $timecreated
 * @property int $timemodified
 * @property int $cacherev
 * @property int $subject_id
 * @property int $curriculum_subject_id
 */
class Subject extends Model
{
    protected $table = 'm_course';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'category',
        'sortorder',
        'fullname',
        'shortname',
        'idnumber',
        'summary',
        'startdate',
        'enddate',
        'timecreated',
        'timemodified',
        'cacherev',
        'subject_id',
        'curriculum_subject_id',

    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function (self $query) {
            $query->sortorder = self::query()->count() + 20000;
            $query->enddate = strtotime('+2 years');
            $query->startdate = strtotime('now');
            $query->timecreated = strtotime('now');
            $query->timemodified = strtotime('now');
            $query->cacherev = strtotime('now');
            $query->id=$query->idnumber;
        });
        static::created(function (self $query) {
            if (!Context::query()->where(['instanceid' => $query->id,'contextlevel'=>50])->exists()) {
                $context = new Context();
                $context->instanceid = $query->id;
                $context->makePath($query->category);
                $context->save();
            }
        });
    }
}
