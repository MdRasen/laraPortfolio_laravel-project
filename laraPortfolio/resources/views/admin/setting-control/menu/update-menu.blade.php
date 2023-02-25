@extends('layouts.admin')
@section('title', 'laraPortfolio - Update Menu')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Update Menu <a href="{{ route('public.index') }}" target="_blank" class="btn btn-primary float-end">Live
                        View</a></h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Update Menu</h3>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-7">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputName" type="text"
                                                    placeholder="Menu Name" />
                                                <label for="inputName">Menu Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputMenuSlug" type="text"
                                                    placeholder="Menu Slug" />
                                                <label for="inputMenuSlug">Menu Slug</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-7">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputIcon" type="text"
                                                    placeholder="Menu Icon (Font Awesome Link)" />
                                                <label for="inputIcon">Menu Icon (Font Awesome Link)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputMenuSlug" type="number"
                                                    placeholder="Menu Sort (Order)" />
                                                <label for="inputMenuSlug">Menu Sort (1-6)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Status Mode:</h6>
                                    <div class="row">
                                        <div class="col-md-7 mb-2">
                                            <label for="category_navbar_status">Navbar Status (Active):</label>
                                            <input type="checkbox" name="navbar_status">
                                        </div>
                                        <div class="col-md-5 mb-0">
                                            <div class="d-grid"><a class="btn btn-primary btn-block" href="#">Create
                                                    Menu</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Current Active Menus</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table id="myTable" class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>Menu Name</th>
                                                <th>Menu Icon</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>About</td>
                                                <td>Here</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>About</td>
                                                <td>Here</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>About</td>
                                                <td>Here</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>About</td>
                                                <td>Here</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>About</td>
                                                <td>Here</td>
                                                <td>6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
