@extends('layouts.admin')
@section('title', 'laraPortfolio - Edit Service')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Edit Service <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
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
                        <form action="#" method="POST">
                            @csrf
                            <input type="text" name="service_id" value="{{ $service->id }}" hidden>
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <input type="text" class="form-control" name="service_name"
                                            value="{{ $service->service_name }}">
                                        <p style="color:red;">
                                            @error('service_name')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Font Awesome Icon Class</label>
                                        <input type="text" class="form-control" name="icon_class"
                                            value="{{ $service->icon_class }}">
                                        <p style="color:red;">
                                            @error('icon_class')
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
                                        <textarea class="form-control" name="short_desc" rows="2">{{ $service->short_desc }}</textarea>
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
                                            value="{{ $service->sort }}" placeholder="Sort by number">
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
                                            <option value="Active" {{ $service->status == 'Active' ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="Hidden"{{ $service->status == 'Hidden' ? 'selected' : '' }}>
                                                Hidden</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary mr-2">Update Service</button>
                                    <a href="#" class="btn btn-light">Cancel</a>
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
                                            <th>Service Name</th>
                                            <th>Icon Class</th>
                                            <th style="width: 40%;">Description</th>
                                            <th>Sort</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>{{ $item->service_name }}</td>
                                                <td>{{ $item->icon_class }}</td>
                                                <td style="width: 40%;">{{ $item->short_desc }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-service', ['ser_id' => $item->id]) }}"
                                                        class="btn btn-primary">Edit</a>

                                                    @if ($item->id == $service->id)
                                                    @else
                                                        <a href="{{ route('admin.delete-service', ['ser_id' => $item->id]) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    @endif
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
