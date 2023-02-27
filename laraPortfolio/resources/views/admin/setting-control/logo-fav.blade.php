@extends('layouts.admin')
@section('title', 'laraPortfolio - Logo & Favicon')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Update Logo & Favicon <a href="{{ route('public.index') }}" target="_blank"
                        class="btn btn-primary float-end">Live View</a></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-secondary">Previous</h4>
                                <h3 class="text-center mt-4 pb-4">
                                    @if ($about)
                                        {{ $about->nickname }}
                                    @else
                                        Atlas
                                    @endif
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.logo-update') }}" method="POST">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <input type="text" class="form-control" name="nickname"
                                                value="{{ $about ? $about->nickname : 'Atlas' }}" placeholder="Nickname">
                                            <p style="color:red;">
                                                @error('nickname')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-block">Generate/Update
                                                Logo</button>
                                        </div>
                                        @if (session('logo_msg'))
                                            <div class="alert alert-success alert-dismissible fade show mt-3"
                                                role="alert">
                                                <strong>Holy guacamole!</strong> {{ session('logo_msg') }}
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-secondary">Previous</h4>

                                @if ($about)
                                    <img class="rounded mx-auto d-block" width="80px" height="80px"
                                        src="{{ asset('storage/favicon') }}/{{ $about->favicon }}" alt="favicon">
                                @else
                                    <img class="rounded mx-auto d-block" width="80px" height="80px"
                                        src="{{ asset('public-assets/images/fabicon.png') }}" alt="favicon">
                                @endif
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.fav-update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row form-group">
                                        <div class="form-group">
                                            <label>Favicon</label>
                                            <input type="file" class="form-control" name="favicon" placeholder="Favicon">
                                            <p style="color:red;">
                                                @error('favicon')
                                                    *{{ $message }}
                                                @enderror
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Update
                                                Favicon</button></div>
                                        @if (session('fav_msg'))
                                            <div class="alert alert-success alert-dismissible fade show mt-3"
                                                role="alert">
                                                <strong>Holy guacamole!</strong> {{ session('fav_msg') }}
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
