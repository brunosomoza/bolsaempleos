<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Experience extends Model
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

    public function getCandidate(){
        return $this->belongsTo(Candidate::class);
    }
}
