@extends('backend.layouts.app')

@section('content')

<div class="row m-0 ">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
              @csrf
            <div class="mb-3">
            <a class="text-decoration-none border p-1 text-white bg-primary rounded" href="{{url('product')}}">All Product</a><br><br>
              <label for="forName" class="form-label">Product Name</label>
              <input type="text" name="product_name" class="form-control" id="category_name" autocomplete="off" placeholder="name">
            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Expire Date</label>
              <input type="date" name="expire_date" class="form-control" id="category_name" autocomplete="off" placeholder="date">
            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Price</label>
              <input type="number" name="price" class="form-control" id="category_name" autocomplete="off" placeholder="price">
            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Old price</label>
              <input type="number" name="old_price" class="form-control" id="category_name" autocomplete="off" placeholder="old price">
            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Company</label>
              <input type="text" name="company" class="form-control" id="category_name" autocomplete="off" placeholder="company">
            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Category</label>
            <select name="category" class="js-example-basic-single form-select" data-width="100%">
                <option value="">Select</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                @endforeach
            </select>

            </div>
            <div class="mb-3">

              <label for="forName" class="form-label">Subcategory</label>
              <input type="text" name="subcategory" class="form-control" id="category_name" autocomplete="off" placeholder="subcategory">
            </div>


            <div class="mb-3">

              <label for="forName" class="form-label">Description</label>
               <textarea  class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleInputPhoto" class="form-label">Photo</label>
              <input type="file" name="thumbnail" class="form-control" id="exampleInputPhoto" >
            </div>

            <button type="submit" class="btn btn-primary me-2">Create New</button>
            <button class="btn btn-secondary">Cancel</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
