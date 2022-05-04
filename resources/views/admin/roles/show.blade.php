@extends('layouts.main')

@section('content')
    <section class="content-header mt-5">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 offset-2">
                <div class="card card-info">
                    <div class="card-header">
                        <h5>Role Discription
                            <a href="{{ asset("roles") }}" class="btn btn-warning ml-2 float-right btn-sm text-dark text-sm text-bold">View All Roles</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 col-sm-12"><h4 class="float-left">{{ $role->name }}</h4></div>
                            <div class="col-md-5 col-sm-12">

                            </div>
                            <div class="col-md-12 col-sm-12 mt-4">
                                <table id="tblPermission" class="table table-bordered table-striped text-sm">
                                    <thead>
                                    <tr>
                                        <th class="bg-light" style="width: 350px;">Permissions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rolePermissions as $rolePermission)
                                        <tr>
                                            <td>{{ $rolePermission->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-warning float-right mr-1 text-sm text-bold">Edit</a>
                                <a href="{{ asset('roles') }}" class="btn btn-info border-0 float-right text-white text-sm text-bold">Back</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




