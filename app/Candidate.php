<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Candidate extends Model
{
//    public static function boot()
//    {
//       parent::boot();
//        self::creating(function ($model) {
//            $model->uuid = (string) Uuid::generate(4);
//        });
//    }

    protected $fillable = [
        'user_id', 'profession_id', 'email'
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

    public function getJobs(){
        return $this->belongsToMany(Job::class);
    }





}
