<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Study extends Model
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

    const TERMINADO = 'TERMINADO';
    const CURSANDO = 'CURSANDO';
    const ABANDONADO = 'ABANDONADO';

    const SECUNDARIA = 'SECUNDARIA';
    const INSTITUTO = 'INSTITUTO';
    const UNIVERSIDAD = 'UNIVERSIDAD';
    const MAESTRIA = 'MAESTRIA';
    const DOCTORADO = 'DOCTORADO';
    const OTROS = 'OTROS';

}
