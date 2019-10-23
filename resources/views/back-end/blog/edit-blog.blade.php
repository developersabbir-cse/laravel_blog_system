@extends('back-end.master')

@section('title')
    Edit Blog
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
            <h1 class="text-success">{{ Session::get('message') }}</h1>
            <form role="form" action="{{ route('update-blog') }}" method="post" enctype="multipart/form-data" name="editBlogForm">
            @csrf
            <!-- text input -->
                <div class="form-group w-100 pb-5 d-inline">
                    <select name="category_id" class="" class=" form-control" style="display: inline;width: 100%; height: 35px;">
                        @foreach( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label> Blog Title</label>
                    <input type="text" value="{{ $blog->blog_title }}" name="blog_title" class="form-control"/>
                    <input type="hidden" value="{{ $blog->id }}" name="id" class="form-control"/>
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label>Blog Short Description</label>
                    <textarea class="form-control" name="blog_short_description" rows="3">{{ $blog->blog_short_description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Blog Long Description</label>
                    <textarea class="form-control" id="editor" name="blog_long_description" rows="4">{{ $blog->blog_long_description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Blog Image</label>
                    <input type="file" name="blog_image" accept="image/*">
                    <br>
                    <img src="{{ asset($blog->blog_image) }}" height="100">
                </div>

                <div class="form-group">
                    <label>Publication Status</label><br>
                    <input type="radio" name="publication_status" {{ $category->publication_status==1?'checked':'' }} value="1" id="pb1"><label for="pb1">Published</label>
                    <input type="radio" name="publication_status" {{ $category->publication_status==0?'checked':'' }} value="0" id="pb0"><label for="pb0">Unpublished</label>

                </div>
                <div class="form-group">
                    <label></label><br>
                    <input type="submit" class="btn btn-success btn-block" value="Submit Blog">

                </div>



                <!-- radio -->


            </form>
        </div>
    </div>
    <script>
        document.forms['editBlogForm'].elements['category_id'].value='{{ $blog->category_id }}';
    </script>
@endsection