@extends('layouts.admin')
@section('title', 'larablog - Blog')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Create Blog <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
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
                        <form action="{{ route('admin.create-blog') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label>Blog Name</label>
                                        <input type="text" class="form-control" name="blog_name"
                                            value="{{ old('blog_name') }}" placeholder="Top 5 Tips For Web Developer">
                                        <p style="color:red;">
                                            @error('blog_name')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Image (500 x 360)</label>
                                        <input type="file" class="form-control" name="blog_image"
                                            value="{{ old('blog_image') }}" placeholder="Recommended size: 500 x 360">
                                        <p style="color:red;">
                                            @error('blog_image')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="blog_body" rows="8" id="summernote" placeholder="Write Description"></textarea>
                                        <p style="color:red;">
                                            @error('blog_body')
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
                                    <button type="submit" class="btn btn-primary mr-2">Create Blog</button>
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
                                            <th>Blog Image</th>
                                            <th>Name</th>
                                            <th>Sort</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $item)
                                            <tr>
                                                <td>
                                                    @if ($item->blog_image == null)
                                                        No Image
                                                    @else
                                                        <img src="{{ asset('storage/blog') }}/{{ $item->blog_image }}"
                                                            alt="admin avatar" style="height: 80px">
                                                    @endif
                                                </td>
                                                <td>{{ $item->blog_name }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.edit-blog', ['blog_id' => $item->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('admin.delete-blog', ['blog_id' => $item->id]) }}"
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
