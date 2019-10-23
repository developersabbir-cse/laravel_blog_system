@extends('back-end.master')

@section('title')
    Manage Category
@endsection

@section('body')
  <div class="box">
      <h1>Manage Category</h1>
      <h1 class="text-light bg-dark text-center">{{ Session::get('message') }}</h1>

      <table class="table table-striped table-bordered">
          <thead>
                <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Description</th>
                    <th scope="col">Publication Status</th>
                    <th scope="col">Action</th>
                </tr>
          </thead>
          <tbody>
          @php($i=1)
            @foreach($categories as $category)
            <tr>
                <td scope="row">{{ $i++ }}</td>
                <td >{{ $category->category_name }}</td>
                <td >{{ $category->category_description }}</td>
                <td >{{ $category->publication_status=='1'?'Published':'Unpublished' }}</td>
                <td>
                    <a href="{{ route('edit-category',['id' =>$category->id]) }}">Edit</a>
                    <a href="#" id="{{ $category->id }}" class="delete">Delete</a>
                    <form action="{{ route('delete-category') }}" method="post" id="del{{ $category->id }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $category->id }}">
                    </form>
                </td>
            </tr>
                @endforeach
          </tbody>
      </table>
  </div>


@endsection