@extends('layouts.admin')
@section('title', 'laraPortfolio - View SKills')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View Skills <a href="{{ route('admin.create-skills') }}" class="btn btn-primary float-end">Add New
                        Skills</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                @endif

                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-md">
                                <table id="myTable" class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Skill Name</th>
                                            <th>Progress</th>
                                            <th>Sort</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skills as $item)
                                            <tr>
                                                <td>{{ $item->skill_name }}</td>
                                                <td>{{ $item->progress }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-skills', ['skill_id' => $item->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
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
        </div>
    </div>

@endsection
