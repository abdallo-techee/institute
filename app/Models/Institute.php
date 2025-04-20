<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'ins_name',
        'category_id_fk' ,
        'user_id_fk',
        'ins_lic_photo' ,
        'ins_is_verified'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class  ,  'category_id_fk');
    }


    public function user()
    {
        return $this->belongsTo(User::class  ,  'user_id_fk');
    }

    public function course_advs()
    {
        return $this->hasMany(CourseAdv::class, 'institute_id_fk');
    }



}
