<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      protected $fillable = [
        'category_name',
        'institute_id_fk'

    ];


    public function course_advs(){

        return $this->hasMany(CourseAdv::class , 'category_id_fk');

    }
    public function institute()
{
    return $this->belongsTo(Institute::class , 'institute_id_fk');
}


}
