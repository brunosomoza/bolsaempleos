<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Room
 *
 * @property int $id
 * @property string $code
 * @property int $minutes
 * @property int $recorded
 * @property string $url
 * @property string $clave
 * @property int $candidate_id
 * @property int $job_id
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereClave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUrl($value)
 * @mixin \Eloquent
 */
class Room extends Model
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


}
