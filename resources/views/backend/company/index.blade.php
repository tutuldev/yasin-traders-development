@extends('backend.layouts.app')

@section('content')

<div class="row m-0">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('company.create')}}" type="button" class="btn btn-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                    Create Company
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
                            @foreach ($companies as $company)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{$company->company_name}}
                                </td>
                                <td>
                                    {{$company->getuser->name}}
                                </td>
                                <td>
                                    {{$company->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/company/' . $company->thumbnail) }}" height="40px" width="50px" alt="">
                                </td>
                                <td>
                                    <form action="{{route('company.destroy', $company->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure ! Delete category ?')" class="btn btn-danger btn-xs btn-icon">
                                            <i data-feather="trash">Delete</i>
                                        </button>
                                    </form>
                                    <a href="{{route('company.edit', $company->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                                        <i data-feather="check-square">Edit</i>
                                    </a>
                                    <a href="{{route('company.show', $company->id)}}" type="button" class="btn btn-success btn-xs btn-icon">
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
