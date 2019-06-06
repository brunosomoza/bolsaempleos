<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\District
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $coderegion
 * @property string $codeprovince
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereCodeprovince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereCoderegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class District extends Model
{
    public function getRegion(){
        return $this->belongsTo(Region::class)->select('id','code','name');
    }
}
