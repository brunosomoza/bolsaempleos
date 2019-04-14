<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function getRegion(){
        return $this->belongsTo(Region::class)->select('id','code','name');
    }
}
