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
                                <img class="rounded mx-auto d-block" width="80px" height="80px"
                                    src="{{ asset('admin-assets\assets\img\here.png') }}" alt="favicon">
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.logo-update') }}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nickname" id="inputNickname" type="text"
                                            placeholder="Nickname" value="{{ old('nickname') }}" />
                                        <label for="inputNickname">Nickname</label>
                                        <p style="color:red;">
                                            @error('nickname')
                                                *{{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-block">Generate/Update
                                                Logo</button>
                                        </div>
                                        @if (session('logo_msg'))
                                            <div class="alert alert-success mt-3" role="alert">
                                                {{ session('logo_msg') }}
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
                                <img class="rounded mx-auto d-block" width="80px" height="80px"
                                    src="{{ asset('public-assets/images/fabicon.png') }}" alt="favicon">
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.fav-update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="file" name="favicon" class="form-control">
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Update
                                                Favicon</button></div>
                                        @if (session('fav_msg'))
                                            <div class="alert alert-success mt-3" role="alert">
                                                {{ session('fav_msg') }}
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
