@extends('layouts.admin')
@section('title', 'laraPortfolio - Portfolio')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Create Portfolio <a href="{{ route('public.index') }}" target="_blank"
                        class="btn btn-primary float-end">Live
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
                        <form action="{{ route('admin.create-portfolio') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Portfolio Name</label>
                                        <input type="text" class="form-control" name="portfolio_name"
                                            value="{{ old('portfolio_name') }}" placeholder="Modern Portfolio Website">
                                        <p style="color:red;">
                                            @error('portfolio_name')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image (500 x 360)</label>
                                        <input type="file" class="form-control" name="portfolio_image"
                                            value="{{ old('portfolio_image') }}" placeholder="Recommended size: 500 x 360">
                                        <p style="color:red;">
                                            @error('portfolio_image')
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
                                    <button type="submit" class="btn btn-primary mr-2">Create Portfolio</button>
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
                                            <th>Portfolio Image</th>
                                            <th>Name</th>
                                            <th>Sort</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $item)
                                            <tr>
                                                <td>
                                                    @if ($item->portfolio_image == null)
                                                        No Image
                                                    @else
                                                        <img src="{{ asset('storage/portfolio') }}/{{ $item->portfolio_image }}"
                                                            alt="admin avatar" style="height: 80px">
                                                    @endif
                                                </td>
                                                <td>{{ $item->portfolio_name }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-portfolio', ['port_id' => $item->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('admin.delete-portfolio', ['port_id' => $item->id]) }}"
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
