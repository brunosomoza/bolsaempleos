<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Summary
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $size
 * @property int $downloads
 * @property string $url
 * @property int $public
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereDownloads($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Summary whereUrl($value)
 * @mixin \Eloquent
 */
class Summary extends Model
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
