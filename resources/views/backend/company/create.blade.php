@extends('backend.layouts.app')

@section('content')

<div class="row m-0 ">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
              @csrf
            <div class="mb-3">
            <a class="text-decoration-none border p-1 text-white bg-primary rounded" href="{{url('company')}}">All Company</a><br><br>
              <label for="forName" class="form-label">Company Name</label>
              <input type="text" name="company_name" class="form-control" id="company_name" autocomplete="off" placeholder="name">
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
