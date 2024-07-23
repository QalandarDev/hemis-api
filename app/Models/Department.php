<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  int $timemodified
 * @property  string $name
 * @property  string $description
 * @property  string $path
 * @property int $idnumber
 * @property int $parent
 * @property int $id
 * @property int $sortorder
 */
class Department extends Model
{
    protected $table = 'm_course_categories';
    public $timestamps = false;
    protected $fillable = [
        'timemodified',
        'name',
        'description',
        'idnumber',
        'parent',
        'path',
        'sortorder'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function (Department $model) {
            $model->timemodified = time();
            if ($model->parent) {
                $model->path = '/' . $model->parent;
            } else {
                $model->path = '';
            }
            $model->sortorder = Department::query()->max('sortorder') + 10000;

        });
        static::created(function (Department $model) {
            $model = Department::query()->find($model->id);
            $model->path = '/' . $model->id;
            $model->update();
        });
    }
}
