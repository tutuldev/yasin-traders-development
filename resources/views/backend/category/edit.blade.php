@extends('backend.layouts.app')

@section('content')

<div class="row m-0 ">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                @method('put')
            <div class="mb-3">
            <a class="text-decoration-none border p-1 text-white bg-primary rounded" href="{{url('category')}}">All Category</a><br><br>
              <label for="forName" class="form-label">Category Name</label>
              <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" id="category_name" autocomplete="off" placeholder="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputPhoto" class="form-label">Photo</label>
              <input type="file" name="thumbnail" class="form-control" id="exampleInputPhoto" >
              <img src="{{ asset('storage/category/' . $category->thumbnail) }}" height="40px" width="50px" alt="">
            </div>

            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button class="btn btn-secondary">Cancel</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
