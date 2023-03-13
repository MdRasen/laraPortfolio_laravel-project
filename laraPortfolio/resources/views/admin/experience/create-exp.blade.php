@extends('layouts.admin')
@section('title', 'laraPortfolio - Experience')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Create Experience <a href="{{ route('public.index') }}" target="_blank"
                        class="btn btn-primary float-end">Live View</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.create-exp') }}" method="POST">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Experience Name</label>
                                        <input type="text" class="form-control" name="exp_name"
                                            value="{{ old('exp_name') }}" placeholder="Web Developer">
                                        <p style="color:red;">
                                            @error('exp_name')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="month" class="form-control" name="start_date"
                                            value="{{ old('start_date') }}">
                                        <p style="color:red;">
                                            @error('start_date')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="month" class="form-control" name="end_date"
                                            value="{{ old('end_date') }}">
                                        <p style="color:red;">
                                            @error('end_date')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea class="form-control" name="short_desc" rows="2" placeholder="Short description"></textarea>
                                        <p style="color:red;">
                                            @error('short_desc')
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
                                    <button type="submit" class="btn btn-primary mr-2">Create Experience</button>
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
                                            <th>Experience Name</th>
                                            <th>Date</th>
                                            <th style="width: 40%;">Description</th>
                                            <th>Sort</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($experiences as $item)
                                            <tr>
                                                <td>{{ $item->experience_name }}</td>
                                                <td>{{ $item->start_date }} - {{ $item->end_date }}</td>
                                                <td style="width: 40%;">{{ $item->short_desc }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-exp', ['exp_id' => $item->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('admin.delete-exp', ['exp_id' => $item->id]) }}"
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
