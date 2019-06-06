<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

/**
 * App\Candidate
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $profession_id
 * @property int|null $country_id
 * @property int|null $salary
 * @property int|null $graduate
 * @property string|null $identification_document
 * @property string|null $objective
 * @property string|null $name
 * @property string|null $sexo
 * @property string|null $birthdate
 * @property string|null $telephone
 * @property string|null $address
 * @property string|null $civil
 * @property string|null $skills
 * @property string|null $picture
 * @property string|null $title
 * @property string|null $district
 * @property string|null $language
 * @property string|null $level_language
 * @property int|null $years_experience
 * @property int|null $price_hour
 * @property int|null $price_hour_min
 * @property string|null $region
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereGraduate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereIdentificationDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereLevelLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereObjective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate wherePriceHour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate wherePriceHourMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereProfessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereSexo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereYearsExperience($value)
 * @mixin \Eloquent
 */
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

    protected $table= 'candidates';

    public function profession(){
        return  $this->belongsTo(Profession::class)->select('id','name');
    }

    public function country(){
        return  $this->belongsTo(Country::class)->select('id','name');
    }

    public function studies(){
        return $this->hasMany(Study::class);
    }

    public function experiences(){
        return $this->hasMany(Experience::class);
    }

    public function references(){
        return $this->hasMany(Reference::class);
    }

    public function points(){
        return $this->belongsTo(Point::class);
    }

    public function summaries(){
        return $this->belongsTo(Summary::class);
    }

    public function presentations(){
        return $this->belongsTo(Presentation::class);
    }

    public function certificates(){
        return $this->hasMany(Certificate::class);
    }

    public function catalogs(){
        return $this->hasMany(Catalogue::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }





}
