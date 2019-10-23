<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use DB;

class TechController extends Controller
{
    public function home(){
        DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->select('blogs.*','categories.category_name')
            ->get();
        $blog=Blog::all();
        return view('front-end.home.home',[
            'categories'                =>Category::where('publication_status',1)->orderBy('id')->get(),
            'technology'                =>Blog::where('publication_status',1)->where('category_id',1)->take(1)->orderBy('id','desc')->get(),
            'education'                 =>Blog::where('publication_status',1)->where('category_id',5)->take(1)->orderBy('id','desc')->get(),
            'webdev'                    =>Blog::where('publication_status',1)->where('category_id',7)->take(1)->orderBy('id','desc')->get(),
            'blogs'                     =>Blog::where('publication_status',1)->orderBy('id','desc')->get(),
            'firstSlots'                =>Category::where('publication_status',1)->where('id',1)->get(),
            'recentNewsCategory'        =>Category::where('publication_status',1)->orderBy('id','desc')->get()
        ]);
    }
    public function post($id){
        return view('front-end.post.post',[
            'categoryPost' =>Blog::where('category_id',$id)->where('publication_status',1)->get(),
            'categories' =>Category::where('publication_status',1)->orderBy('id')->get(),

        ]);
    }
}
