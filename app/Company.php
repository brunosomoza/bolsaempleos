<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Company
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company query()
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $user_id
 * @property int|null $region_id
 * @property int|null $district_id
 * @property int|null $industry_id
 * @property string|null $code_districts
 * @property string|null $ruc
 * @property string|null $address
 * @property string|null $logo
 * @property string|null $website
 * @property string|null $namesocial
 * @property string|null $telephone
 * @property string|null $description
 * @property int|null $verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCodeDistricts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereNamesocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereRuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereWebsite($value)
 */
class Company extends Model
{
//    public static function boot()
//    {
//        parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = (string) Uuid::generate(4);
//        });
//    }

    protected $fillable = [
        'user_id'
    ];

    public function getRegion(){
        return  $this->hasOne(Region::class)->select('id','name','code');
    }

    public function getDistrict(){
        return  $this->hasOne(District::class)->select('id','code','name','coderegion','codeprovince');
    }

    public function getIndustry(){
        return $this->hasOne(Industry::class)->select('id','name');
    }

}
