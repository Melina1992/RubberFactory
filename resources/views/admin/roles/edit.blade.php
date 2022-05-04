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
                <div class="col-md-5 offset-2">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5>Edit Role
                                <a href="{{ asset('roles') }}" class="btn btn-warning btn-sm float-right text-dark text-sm text-bold">View All Roles</a>
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

                            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                @method('PATCH')

                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Role:</label><span class="text-danger float-right mt-2">*</span>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control d-inline-block text-sm" name="name" value="{{ (old('name')) ?  old('name') : $role->name }}" placeholder="Enter Role name here">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-sm">Permission:</label><span class="text-danger float-right mt-2"></span>
                                        </div>
                                        <div class="col-md-9 mt-2">

                                            @foreach($permissions as $permission)
                                                <div class="form-check">
                                                    <input
                                                        type="checkbox"
                                                        class="form-check-input text-sm"
                                                        name="permissions[]"
                                                        id="{{ $permission->id }}"
                                                        value="{{ $permission->id }}"
                                                        {{ (in_array($permission->id, $rolePermissions)) ? ' checked' : '' }}
                                                    />
                                                    <label class="form-check-label text-sm" for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach

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
                                            <button type="submit" class="btn btn-info mt-3 form-control">Update</button>
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





