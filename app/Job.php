<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Job
 *
 * @property int $id
 * @property string $code
 * @property int $company_id
 * @property int|null $profession_id
 * @property string $type
 * @property string|null $name
 * @property string|null $title
 * @property string|null $description
 * @property string|null $start
 * @property string|null $close
 * @property int|null $salary
 * @property int|null $disability
 * @property string|null $status
 * @property int|null $region_id
 * @property int|null $district_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereClose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereDisability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereProfessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
