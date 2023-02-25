@extends('layouts.admin')
@section('title', 'laraPortfolio - View Menu')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View Menu <a href="{{ route('admin.create-menu') }}" class="btn btn-primary float-end">Add A New Menu</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="myTable" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Menu Name</th>
                                <th>Menu Slug</th>
                                <th>Menu Icon</th>
                                <th>Menu Sort</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>About</td>
                                <td>Here</td>
                                <td>Active</td>
                                <td>2</td>
                                <td>Active</td>
                                <td>
                                    <a href="{{ route('admin.update-menu') }}" class="btn btn-primary">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
