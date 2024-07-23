<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $timeadded
 * @property int $cohortid
 * @property int $userid
 */
class GroupMembers extends Model
{
    protected $table = 'm_cohort_members';
    public $timestamps = false;
    protected $fillable = [
        'cohortid',
        'userid',
        'timeadded'
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function (GroupMembers $query) {
            $query->timeadded = time();
        });
    }
}
