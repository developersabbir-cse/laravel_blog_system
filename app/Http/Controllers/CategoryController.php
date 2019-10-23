<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('back-end.category.add-category');

  }
  public function newCategory(Request $request){
        Category::newCategoryInfo($request);

        return redirect('category/add-category')->with('message','Your Category Info Saved Successfully');
  }
  public function manageCategory(){
        return view('back-end.category.manage-category',[
            'categories'    =>Category::all()
        ]);
  }
  public function deleteCategory(Request $request){
        Category::deleteCategoryInfo($request);
      return redirect('category/manage-category')->with('message','Your Category Info Deleted Successfully');
  }
  public function editCategory(Request $request){
        return view('back-end.category.edit-category',[
            'category'    =>Category::find($request->id)
        ]);
  }
  public function updateCategory(Request $request){
        Category::updateCategoryInfo($request);
        return redirect('category/manage-category')->with('message','Your Category Info Updated Successfully');

  }
}
