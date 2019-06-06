<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Certificate
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $type
 * @property int $size
 * @property int $views
 * @property string $url
 * @property int $public
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Certificate whereViews($value)
 * @mixin \Eloquent
 */
class Certificate extends Model
{
//    public static function boot()
//    {
//        parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = (string) Uuid::generate(4);
//        });
//    }
}
