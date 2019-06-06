<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Presentation
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $size
 * @property int $views
 * @property string $url
 * @property int $public
 * @property int $duration
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereViews($value)
 * @mixin \Eloquent
 */
class Presentation extends Model
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
