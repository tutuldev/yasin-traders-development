@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('subcategory.create')}}" type="button" class="btn btn-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                    Create Sub Category
                </a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Create at
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $subcategory)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{$subcategory->subcategory_name}}
                                </td>
                                <td>
                                    {{$category->user_id}}
                                </td>
                                <td>
                                    {{$subcategory->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <form action="{{route('subcategory.destroy', $subcategory->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure ! Delete subcategory ?')" class="btn btn-danger btn-xs btn-icon">
                                            <i data-feather="trash">Delete</i>
                                        </button>
                                    </form>
                                    <a href="{{route('subcategory.edit', $subcategory->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                                        <i data-feather="check-square">Edit</i>
                                    </a>
                                    <a href="{{route('subcategory.show', $subcategory->id)}}" type="button" class="btn btn-success btn-xs btn-icon">
                                        <i data-feather="eye">Show</i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection