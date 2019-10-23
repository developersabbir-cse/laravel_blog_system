@extends('back-end.master')

@section('title')
    Manage Blog
@endsection

@section('body')

    <div class="box">
        <h1>Manage Blog</h1>
        <h1 class="text-success text-center bg-dark">{{ Session::get('message') }}</h1>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Category Name</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Image</th>
                <th scope="col">Publication Status</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($blogs as $blog)
                <tr>
                    <td scope="row">{{ $i++ }}</td>
                    <td >{{ $blog->category_name }}</td>
                    <td >{{ $blog->blog_title }}</td>
                    <td><img src="{{ asset($blog->blog_image) }}" height="100px"></td>
                    <td >{{ $blog->publication_status=='1'?'Published':'Unpublished' }}</td>
                    <td>
                        <a href="{{ route('edit-blog',['id' => $blog->id]) }}">Edit</a>
                        <a href="#" id="{{ $blog->id }}" class="delete">Delete</a>
                        <form action="{{ route('delete-blog') }}" method="post" id="del{{ $blog->id }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blog->id }}">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection