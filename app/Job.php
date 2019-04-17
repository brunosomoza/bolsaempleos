<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Job extends Model
{
//    public static function boot()
//    {
//        parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = (string) Uuid::generate(4);
//        });
//    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    const OPEN = "OPEN";
    const FINISHED = "FINISHED";
    const CLOSED = "CLOSED";

    const FULLTIME = 'FULLTIME';
    const PARTIME = 'PARTIME';
    const FREELANCE = 'FREELANCE';

}
