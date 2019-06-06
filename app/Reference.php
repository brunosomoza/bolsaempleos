<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Reference
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $title
 * @property string $telephone
 * @property string $email
 * @property string $company
 * @property int $candidate_id
 * @property int $industry_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reference whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reference extends Model
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
