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
          
              <label for="forName" class="form-label">expire_date</label>
              <input type="date" name="expire_date" class="form-control" id="category_name" autocomplete="off" placeholder="date">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">price</label>
              <input type="number" name="price" class="form-control" id="category_name" autocomplete="off" placeholder="price">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">old_price</label>
              <input type="number" name="old_price" class="form-control" id="category_name" autocomplete="off" placeholder="old_price">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">company</label>
              <input type="text" name="company" class="form-control" id="category_name" autocomplete="off" placeholder="company">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">category</label>
              <input type="text" name="category" class="form-control" id="category_name" autocomplete="off" placeholder="category">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">subcategory</label>
              <input type="text" name="subcategory" class="form-control" id="category_name" autocomplete="off" placeholder="subcategory">
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">description</label>
              <input type="text" name="description" class="form-control" id="category_name" autocomplete="off" placeholder="description">
            </div>
            </div>
            <div class="mb-3">
          
              <label for="forName" class="form-label">description</label>
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