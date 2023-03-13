@extends('layouts.admin')
@section('title', 'laraPortfolio - Skills')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Create Skills <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
                        View</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.create-skills') }}" method="POST">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Skill Name</label>
                                        <input type="text" class="form-control" name="skill_name"
                                            value="{{ old('skill_name') }}" placeholder="Coding">
                                        <p style="color:red;">
                                            @error('skill_name')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Progress (1-100%)</label>
                                        <input type="number" class="form-control" name="progress"
                                            value="{{ old('progress') }}" placeholder="90%" min="1" max="100">
                                        <p style="color:red;">
                                            @error('progress')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sort</label>
                                        <input type="number" class="form-control" name="sort"
                                            value="{{ old('sort') }}" placeholder="Sort by number">
                                        <p style="color:red;">
                                            @error('sort')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="Active" selected>Active
                                            </option>
                                            <option value="Hidden">Hidden</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary mr-2">Create Skill</button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <hr class="my-3">

                    <div class="col-12">
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
                                                    <a href="{{ route('admin.delete-skills', ['skill_id' => $item->id]) }}"
                                                        class="btn btn-danger">Delete</a>
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
