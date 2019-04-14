<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Company
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company query()
 * @mixin \Eloquent
 */
class Company extends Model
{
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
