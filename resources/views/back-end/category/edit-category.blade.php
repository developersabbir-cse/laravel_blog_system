@extends('back-end.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <!-- left column -->
    <!--/.col (left) -->
    <!-- right column -->
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title border border-dark">Category</h3>
        </div><!-- /.box-header -->
        <div class="box-body  mx-auto w-75">
            <h1 class="text-light bg-dark text-center">{{ Session::get('message') }}</h1>
            <form role="form" action="{{ route('update-category') }}" method="post">
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label> Category Name</label>
                    <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control" placeholder="Enter Your Category Name"/>
                    <input type="hidden" name="id" value="{{ $category->id }}" class="form-control" placeholder="Enter Your Category Name"/>
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label>Category Description</label>
                    <textarea class="form-control" name="category_description" rows="3" placeholder="Enter Your Category Description">{{ $category->category_description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Publication Status</label><br>
                    <input type="radio" name="publication_status" {{ $category->publication_status==1?'checked':'' }}  value="1" id="pb1"><label for="pb1">Published</label>
                    <input type="radio" name="publication_status" {{ $category->publication_status==0?'checked':'' }} value="0" id="pb0"><label for="pb0">Unpublished</label>

                </div>
                <div class="form-group">
                    <label></label><br>
                    <input type="submit" class="btn btn-success btn-block" value="Submit Category Name">

                </div>



                <!-- radio -->


            </form>
        </div>
    </div>

@endsection