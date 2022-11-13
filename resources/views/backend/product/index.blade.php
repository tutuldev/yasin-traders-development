@extends('backend.layouts.app')

@section('content')

<div class="row m-0">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('product.create')}}" type="button" class="btn btn-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                    Create product
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
                                    Added By
                                </th>
                                <th>
                                    Create at
                                </th>
                                <th>
                                    Thumbnail
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{$product->product_name}}
                                </td>
                                <td>
                                    {{$product->getuser->name}}
                                </td>
                                <td>
                                    {{$product->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/product/' . $product->thumbnail) }}" height="40px" width="50px" alt="">
                                </td>
                                <td>
                                    <form action="{{route('product.destroy', $product->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure ! Delete category ?')" class="btn btn-danger btn-xs btn-icon">
                                            <i data-feather="trash">Delete</i>
                                        </button>
                                    </form>
                                    <a href="{{route('product.edit', $product->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                                        <i data-feather="check-square">Edit</i>
                                    </a>
                                    <a href="{{route('product.show', $product->id)}}" type="button" class="btn btn-success btn-xs btn-icon">
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
