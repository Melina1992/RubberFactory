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
                        <h5>All Permissions
                            <a href="{{ route("permissions.create") }}" class="btn btn-warning ml-2 float-right btn-sm text-dark text-sm text-bold">Add New Permission</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 col-sm-12"></div>
                            <div class="col-md-5 col-sm-12">
                                <form action="/searchPermission" method="GET">
                                    @csrf
                                    <div class="input-group input-group-sm" style="width:250px">
                                        <input type="search" id="search" name="search" class="form-control form-control-sm text-sm float-right" aria-controls="permission_1" placeholder="Search by Name">
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-default text-sm">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                        <a href="{{ asset('permissions') }}" class="btn btn-default btn-sm text-sm ml-2">View All</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 col-sm-12 mt-4">
                                <table id="tblPermission" class="table table-bordered table-striped text-sm">
                                    <thead>
                                    <tr role="row">
                                        @if($message = Session::get('success'))
                                            <div>
                                                <p class="pl-2 py-2 alert-success text-sm">{{ $message }}</p>
                                            </div>
                                        @endif
                                        <th class="bg-light" style="width: 40px;">ID</th>
                                        <th class="bg-light" style="width: 300px;">Permission</th>
                                        <th class="bg-light" style="width: 150px;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
                                                    <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-warning btn-sm mr-1 text-bold">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure want to delete this permission?')" >Delete</button>
                                                </form>
                                            </td>
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
                                {{ $permissions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


