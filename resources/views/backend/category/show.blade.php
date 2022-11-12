@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a class="text-decoration-none border p-1 text-white bg-primary rounded" href="{{url('category')}}">All Category</a><br><br>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{$category->category_name}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Thumbnail
                                </td>
                                <td><img src="{{ asset('storage/category/' . $category->thumbnail) }}" height="100px" width="120px" alt=""></td>

                            </tr>
                            <tr>
                                <td>
                                    Added By
                                </td>
                                <td>
                                    {{$category->getuser->name}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-4">
                    <a href="{{route('category.edit', $category->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                        <i data-feather="check-square">Edit</i>
                    </a>
                    <form action="{{route('category.destroy', $category->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sure ! Delete category ?')" class="btn btn-danger btn-xs btn-icon">
                            <i data-feather="trash">Delete</i>
                        </button>
                    </form>
                    <a href="{{route('category.index')}}" type="button" class="btn btn-secondary btn-xs btn-icon">
                        <i data-feather="check-square">Cancel</i>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
