<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Experience
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $title
 * @property string $start
 * @property string $end
 * @property string $functions
 * @property int $peoples
 * @property int $industry_id
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereFunctions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience wherePeoples($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Experience whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
