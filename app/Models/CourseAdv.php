<?php







namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAdv extends Model
{

    //

    use HasFactory;


    protected $fillable = [
        'course_adv_name',
        'category_id_fk'
    ];

    public function category(){
        return $this->belongsTo(Category::class , 'category_id_fk');
    }

}
