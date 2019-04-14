<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'user_id', 'profession_id'
    ];

    public function getProfession(){
        return  $this->hasOne(Profession::class)->select('id','name');
    }

    public function getCountry(){
        return  $this->hasOne(Country::class)->select('id','name');
    }

    public function getStudies(){
        return $this->hasMany(Study::class);
    }

    public function getExperiences(){
        return $this->hasMany(Experience::class);
    }

    public function getReferences(){
        return $this->hasMany(Reference::class);
    }

    public function getPoint(){
        return $this->belongsTo(Point::class);
    }

    public function getSummary(){
        return $this->belongsTo(Summary::class);
    }

    public function getPresentation(){
        return $this->belongsTo(Presentation::class);
    }

    public function getCertificates(){
        return $this->hasMany(Certificate::class);
    }

    public function getCatalogs(){
        return $this->hasMany(Catalogue::class);
    }

    public function getRooms(){
        return $this->hasMany(Room::class);
    }





}
