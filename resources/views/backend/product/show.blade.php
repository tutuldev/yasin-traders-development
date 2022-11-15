@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a class="text-decoration-none border p-1 text-white bg-primary rounded" href="{{url('product')}}">All Product</a><br><br>
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
                                    {{$product->product_name}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Thumbnail
                                </td>
                                <td><img src="{{ asset('storage/product/' . $product->thumbnail) }}" height="100px" width="120px" alt=""></td>

                            </tr>
                            <tr>
                                <td>
                                    Added By
                                </td>
                                <td>
                                    {{$product->getuser->name}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Expir Date
                                </td>
                                <td>
                                    {{$product->expire_date}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Company
                                </td>
                                <td>
                                    {{$product->company}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Category
                                </td>
                                <td>
                                    {{$product->category}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Subcategory
                                </td>
                                <td>
                                    {{$product->subcategory}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Details
                                </td>
                                <td>
                                    {{$product->description}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="my-4">
                    <a href="{{route('product.edit', $product->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                        <i data-feather="check-square">Edit</i>
                    </a>
                    <form action="{{route('product.destroy', $product->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sure ! Delete product ?')" class="btn btn-danger btn-xs btn-icon">
                            <i data-feather="trash">Delete</i>
                        </button>
                    </form>
                    <a href="{{route('product.index')}}" type="button" class="btn btn-secondary btn-xs btn-icon">
                        <i data-feather="check-square">Cancel</i>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
