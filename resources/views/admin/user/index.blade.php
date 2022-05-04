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
                            <h5>All Users
                                <a href="{{ route('users.create') }}" class="btn btn-warning btn-sm float-right text-dark text-sm text-bold">Add New User</a>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12"></div>
                                    <div class="col-md-5 col-sm-12">
                                        <form action="/searchUsers" method="GET">
                                            @csrf
                                            <div class="input-group input-group-sm" style="width:250px">
                                                <input type="search" id="search" name="search" value="{{ old('search') }}" class="form-control form-control-sm text-sm float-right" aria-controls="users" placeholder="Search by Email">
                                                <span class="input-group-append">
                                            <button type="submit" class="btn btn-default text-sm">
                                                <i class="fa fa-search"></i>

                                            </button>
                                        </span>
                                                <a href="{{ asset('users') }}" class="btn btn-default btn-sm text-sm ml-2">View All Users</a>
                                            </div>
                                        </form>
                                    </div>

                            <form action="{{ route('users.store') }}" method="POST">
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
                                            <th class="bg-light" style="width: 300px;">User Name</th>
                                            <th class="bg-light" style="width: 150px;">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>
                                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-warning btn-sm mr-1 text-bold">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure want to delete this permission?')" >Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>





                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        {{ $users->links() }}
                                    </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






