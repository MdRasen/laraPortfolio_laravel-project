@extends('layouts.admin')
@section('title', 'laraPortfolio - Change Pass')
@section('content')

    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Change Password <a href="{{ route('public.index') }}" target="_blank"
                        class="btn btn-primary float-end">Live
                        View</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5>Update Your Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.change-password') }}" method="POST">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Previous Password</label>
                                        <input type="password" class="form-control" name="prev_pass"
                                            value="{{ old('prev_pass') }}" placeholder="Enter previous password">
                                        <p style="color:red;">
                                            @error('prev_pass')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" name="new_pass"
                                            value="{{ old('new_pass') }}" placeholder="Enter New password">
                                        <p style="color:red;">
                                            @error('new_pass')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_pass"
                                            value="{{ old('confirm_pass') }}" placeholder="Confirm password">
                                        <p style="color:red;">
                                            @error('confirm_pass')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
