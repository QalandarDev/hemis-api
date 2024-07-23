<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 *
 * @property int $id
 * @property int $contextlevel
 * @property int $instanceid
 * @property string $path
 * @property int $depth
 * @property int $locked
 */
class Context extends Model
{
    protected $table = 'm_context';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'contextlevel',
        'instanceid',
        'path',
        'depth',
        'locked'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function (self $model) {
            $model->contextlevel = 50;
            $model->depth = 4;
            $model->locked = 0;
            $myid = self::query()->max('id');
            $model->path = $model->path . '/' . $myid+1;
        });
    }

    public function makePath($parentInstance)
    {
        $this->path = self::query()->where('instanceid', $parentInstance)->value('path');
    }
}
