<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['category_id','blog_title','blog_short_description','blog_long_description','blog_image','publication_status'];
    public static function newBlogInfo($request){

        $image=$request->file('blog_image');
        $imageName=str_random('2').$image->getClientOriginalName();
        $directory="Blog-images";
        $image->move($directory,$imageName);

        $blogs=new Blog();
        $blogs->category_id             =$request->category_id;
        $blogs->blog_title              =$request->blog_title;
        $blogs->blog_short_description  =$request->blog_short_description;
        $blogs->blog_long_description   =$request->blog_long_description;
        $blogs->blog_image              =$directory.'/'.$imageName;
        $blogs->publication_status      =$request->publication_status;
        $blogs->save();


    }
    public static function updateBlogInfo($request){

        $blogs=Blog::find($request->id);
        $image=$request->file('blog_image');

        if($image){
            $imageName=$image->getClientOriginalName();
            $directory="Blog-images";
            unlink($blogs->blog_image);
            $image->move($directory,$imageName);
            $blogs->blog_image   =$directory.'/'.$imageName;

        }

        $blogs->category_id             =$request->category_id;
        $blogs->blog_title              =$request->blog_title;
        $blogs->blog_short_description  =$request->blog_short_description;
        $blogs->blog_long_description   =$request->blog_long_description;
        $blogs->publication_status      =$request->publication_status;
        $blogs->save();
    }
    public static function deleteBlogInfo($request){
        $blog=Blog::find($request->id);

        $blog->delete();
    }
}
