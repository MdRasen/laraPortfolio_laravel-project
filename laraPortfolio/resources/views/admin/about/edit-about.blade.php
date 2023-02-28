@extends('layouts.admin')
@section('title', 'laraPortfolio - Edit About')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>About Settings <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
                        View</a></h4>
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

                            <form action="{{ route('admin.edit-about') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" name="full_name"
                                                value="{{ $about->full_name }}" placeholder="Full Name">
                                            <p style="color:red;">
                                                @error('full_name')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <input type="text" class="form-control" name="nickname"
                                                value="{{ $about->nickname }}" placeholder="Nickname">
                                            <p style="color:red;">
                                                @error('nickname')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="designation"
                                                value="{{ $about->designation }}" placeholder="Designation">
                                            <p style="color:red;">
                                                @error('designation')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <label>Short Description</label>
                                        <textarea class="form-control" name="short_description" rows="2" placeholder="Short description">{{ $about->short_description }}</textarea>
                                        <p style="color:red;">
                                            @error('short_description')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="form-control" name="degree"
                                                value="{{ $about->degree }}" placeholder="Degree">
                                            <p style="color:red;">
                                                @error('degree')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="Male" {{ $about->gender == 'Male' ? 'selected' : '' }}>
                                                    Male
                                                </option>
                                                <option value="Female" {{ $about->gender == 'Female' ? 'selected' : '' }}>
                                                    Female</option>
                                                <option value="Others" {{ $about->gender == 'Others' ? 'selected' : '' }}>
                                                    Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input type="date" class="form-control" name="birthday"
                                                value="{{ $about->birthday }}" placeholder="Birthday">
                                            <p style="color:red;">
                                                @error('birthday')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" class="form-control" name="age"
                                                    value="{{ $about->age }}" placeholder="Age">
                                                <p style="color:red;">
                                                    @error('age')
                                                        *{{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $about->email }}" placeholder="Email">
                                                <p style="color:red;">
                                                    @error('email')
                                                        *{{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ $about->phone }}" placeholder="phone">
                                                <p style="color:red;">
                                                    @error('phone')
                                                        *{{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ $about->city }}" placeholder="City">
                                                <p style="color:red;">
                                                    @error('city')
                                                        *{{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Freelance</label>
                                                <select class="form-control" name="freelance">
                                                    <option value="Available"
                                                        {{ $about->freelance == 'Available' ? 'selected' : '' }}>Available
                                                    </option>
                                                    <option value="No"
                                                        {{ $about->freelance == 'No' ? 'selected' : '' }}>
                                                        No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control" name="website_link"
                                                    value="{{ $about->website_link }}" placeholder="Website Link">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>CV File</label>
                                                <input type="file" class="form-control" name="my_file">
                                                <p style="color:red;">
                                                    @error('my_file')
                                                        *{{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <a href="{{ route('admin.view-about') }}" class="btn btn-light">Cancel</a>
                                        </div>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
