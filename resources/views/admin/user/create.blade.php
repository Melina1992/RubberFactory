@extends('layouts.main')

@section('content')
    <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header mt-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 offset-2">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5>Add New User
                                <a href="{{ asset('users') }}" class="btn btn-warning btn-sm float-right text-dark text-sm text-bold">View All Users</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <!--Success Message Display section Start -->
                            @if ($errors->any())
                                <div>
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <br/>
                            @endif
                            @if (session()->get('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                                <br/>
                        @endif
                        <!--Success Message Display section End -->

                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Username:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control d-inline-block text-sm" name="name" value="{{ old('name') }}" placeholder="Enter Username here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Email:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control d-inline-block text-sm" name="email" value="{{ old('email') }}" placeholder="Enter email here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Password:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control d-inline-block text-sm" name="password" value="{{ old('password') }}" placeholder="Enter Password here"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Confirm Password:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control d-inline-block text-sm" name="password_confirmation" placeholder="Re-type password here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Role:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">

                                            <select class="custom-select form-control" id="role" name="role">
                                                <option class="disabled">- Select Role -</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role ->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mt-5">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-3">
                                            <button type="reset" class="btn btn-default mt-3 form-control">Reset</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-info mt-3 form-control">Add</button>
                                        </div>
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







