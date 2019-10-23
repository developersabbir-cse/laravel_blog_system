<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name','category_description','publication_status'];

    public static function newCategoryInfo($request){
        $categories=new Category();
        $categories->category_name          =$request->category_name;
        $categories->category_description   =$request->category_description;
        $categories->publication_status     =$request->publication_status;
        $categories->save();

        }

    public static function deleteCategoryInfo($request){
        $category=Category::find($request->id);
        $category->delete();
    }
    public static function updateCategoryInfo($request){
        $categories=Category::find($request->id);
        $categories->category_name          = $request->category_name;
        $categories->category_description   = $request->category_description;
        $categories->publication_status     = $request->publication_status;
        $categories->save();
    }
}
