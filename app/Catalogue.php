<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Catalogue
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Catalogue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Catalogue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Catalogue query()
 * @mixin \Eloquent
 */
class Catalogue extends Model
{
//    public static function boot()
//    {
//        parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = (string) Uuid::generate(4);
//        });
//    }
}
