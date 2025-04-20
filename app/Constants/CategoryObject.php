<?php

namespace App\Constants;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryObject extends Model
{



    public static  function getCategory($id){
        $category = Category::findOrFail($id);

        return $category;
        // return self::all($id);
    }
}
