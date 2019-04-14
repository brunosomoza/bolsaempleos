<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function getCandidate(){
        return $this->belongsTo(Candidate::class);
    }
}
