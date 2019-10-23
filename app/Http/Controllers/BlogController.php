<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlog(){
        return view('back-end.blog.add-blog',[
            'categories'    =>Category::where('publication_status',1)->get()
        ]);
    }
    public function newBlog(Request $request){
        Blog::newBlogInfo($request);
        return redirect('blog/add-blog')->with('message','Your Blog Info Added Successfully');

    }
    public function manageBlog(){
        $blogs=DB::table('blogs')
            ->join('categories','blogs.category_id','=','categories.id')
            ->select('blogs.*','categories.category_name')
            ->get();
        return view('back-end.blog.manage-blog',[
            'blogs' =>$blogs
        ]);
    }
    public function deleteBlog(Request $request){
        Blog::deleteBlogInfo($request);
        return redirect('blog/manage-blog')->with('message','Your Blog Info Deleted Successfully');

    }
    public function editBlog($id){
        return view('back-end.blog.edit-blog',[
            'categories'    =>Category::where('publication_status',1)->get(),
            'blog'          =>Blog::find($id)
        ]);
    }
    public function updateBlog(Request $request){
            Blog::updateBlogInfo($request);
        return redirect('blog/manage-blog')->with('message','Your Blog Info Updated Successfully');

    }
    public function blogPost($id){

        return view('front-end.blog-post.blog-post',[
            'blogs'         =>Blog::find($id),
            'categories'    =>Category::where('publication_status',1)->orderBy('id')->get(),

        ]);
    }

}
