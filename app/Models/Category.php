<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category,$image,$imageNewName,$directory,$imgUrl;

    public static function saveCategory($request){
       self::$category = new Category();
       self::$category->category_name = $request->category_name;
       self::$category->image = self::saveImage($request);
       self::$category->save();
    }

    private static function saveImage($request){
       self::$image = $request->file('image');
       self::$imageNewName ='category-'.rand().'.'.self::$image->Extension();
       self::$directory='admin-asset/upload-image/category/';
       self::$imgUrl=self::$directory.self::$imageNewName;
       self::$image->move(self::$directory,self::$imageNewName);
       return self::$imgUrl;
    }


}
