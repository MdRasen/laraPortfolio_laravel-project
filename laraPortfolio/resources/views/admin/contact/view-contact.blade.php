@extends('layouts.admin')
@section('title', 'larablog - Contact')
@section('content')
    <div class="container-fluid px-3">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Contact Infomation <a href="{{ route('public.index') }}" target="_blank"
                        class="btn btn-primary float-end">Live
                        View</a></h4>
            </div>
            <div class="card-body">
                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> {{ session('msg') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5>View Messages</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ $item->message }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="mailto:{{ $item->email }}" target="_blank"
                                                    class="btn btn-primary">Reply</a>
                                                <a href="{{ route('admin.delete-message', ['msg_id' => $item->id]) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr class="my-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Infomation</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.submit-contact') }}" method="POST">
                            @csrf
                            <div class="row form-group">
                                <div class="col-sm-6">
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
                                <div class="col-sm-6">
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
                                        <label>Website</label>
                                        <input type="text" class="form-control" name="website_link"
                                            value="{{ $about->website_link }}" placeholder="Website Link">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group float-end">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
