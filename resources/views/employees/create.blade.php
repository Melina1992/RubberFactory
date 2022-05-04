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

        <div class="container-fluid mx-4">
            <div class="row">
                <div class="col-md-10 offset-2">
                    <div class="card card-info">
                        <div class="card-header">
                            <h5>Add New Employee
                                <a href="{{ asset('employees') }}" class="btn btn-warning btn-sm float-right text-dark text-sm text-bold">View All Eployees</a>
                            </h5>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('employees.store') }}" method="POST">

                                {{ csrf_field() }}
                               <div class="row">
                                   <div class="col-md-8" style="border-right:1px solid #ececec;">
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Full Name:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-9">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('full_name') ? 'is-invalid': '' }} text-sm" autofocus name="full_name" value="{{ old('full_name') }}" placeholder="Enter full name here">
                                                   @if($errors->has('full_name'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('full_name') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Calling Name:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-3">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('calling_name') ? 'is-invalid': '' }} text-sm" autofocus name="calling_name" value="{{ old('calling_name') }}" placeholder="Enter calling name here">
                                                   @if($errors->has('calling_name'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('calling_name') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                               <div class="col-md-2">
                                                   <label class="col-form-label text-sm">EPF No:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('epf_no') ? 'is-invalid': '' }} text-sm" autofocus name="epf_no" value="{{ old('epf_no') }}" placeholder="Enter epf number here">
                                                   @if($errors->has('epf_no'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('epf_no') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Gender :</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-3">
                                                   <select class="custom-select form-control text-sm" id="gender_id" name="gender_id" value="{{ old('gender_id') }}">
                                                       <option class="disabled text-sm">- Select Gender -</option>
                                                       @foreach($genders as $gender)
                                                           <option value="{{$gender->id}}"
                                                                   @if(old('gender_id') == $gender->id) selected="selected" @endif>{{$gender->name}}</option>
                                                       @endforeach
                                                   </select>
                                                   @if($errors->has('gender_id'))
                                                       <span class="invalid-feedback" role="alert">
                                                   <label class="text-red text-sm">{{ $errors->first('gender_id') }}</label>
                                               </span>
                                                   @endif
                                               </div>
                                               <div class="col-md-2">
                                                   <label class="col-form-label text-sm">Civil Status:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-4">
                                                   <select class="custom-select form-control text-sm" id="civil_status_id" name="civil_status_id" value="{{ old('civil_status_id') }}">
                                                       <option class="disabled text-sm">- Select Civil Status -</option>
                                                       @foreach($civilStatuses as $civilStatus)
                                                           <option value="{{$civilStatus->id}}"
                                                                   @if(old('gender_id') == $civilStatus->id) selected="selected" @endif>{{$civilStatus->name}}</option>
                                                       @endforeach
                                                   </select>
                                                   @if($errors->has('civil_status_id'))
                                                       <span class="invalid-feedback" role="alert">
                                                   <label class="text-red text-sm">{{ $errors->first('civil_status_id') }}</label>
                                               </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">NIC No:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-3">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('nic') ? 'is-invalid': '' }} text-sm" autofocus name="nic" value="{{ old('nic') }}" placeholder="Enter NIC here">
                                                   @if($errors->has('nic'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('nic') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                               <div class="col-md-2">
                                                   <label class="col-form-label text-sm">Date of Birth:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="date" class="form-control d-inline-block{{ $errors->has('date_of_birth') ? 'is-invalid': '' }} text-sm" autofocus name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Enter NIC here">
                                                   @if($errors->has('date_of_birth'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('date_of_birth') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Address:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-9">
                                            <textarea type="text" class="form-control d-inline-block{{ $errors->has('address') ? 'is-invalid': '' }} text-sm" autofocus name="address" value="{{ old('address') }}">
                                            </textarea>
                                                   @if($errors->has('address'))
                                                       <span class="invalid-feedback" role="alert">
                                                   <label class="text-red text-sm">{{ $errors->first('address') }}</label>
                                               </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Mobile:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-3">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('mobile') ? 'is-invalid': '' }} text-sm" autofocus name="mobile" value="{{ old('mobile') }}" placeholder="Enter mobile here">
                                                   @if($errors->has('mobile'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('mobile') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                               <div class="col-md-2">
                                                   <label class="col-form-label text-sm">Landline:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="text" class="form-control d-inline-block{{ $errors->has('landline') ? 'is-invalid': '' }} text-sm" autofocus name="landline" value="{{ old('landline') }}" placeholder="Enter landline here">
                                                   @if($errors->has('landline'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('landline') }}</label>
                                                </span>
                                                   @endif
                                               </div>

                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="row">
                                               <div class="col-md-3">
                                                   <label class="col-form-label text-sm">Designation:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-3">
                                                   <select class="custom-select form-control text-sm" id="designation_id" name="designation_id" value="{{ old('designation_id') }}">
                                                       <option class="disabled text-sm">- Select Civil Status -</option>
                                                       @foreach($designations as $designation)
                                                           <option value="{{$designation->id}}"
                                                                   @if(old('designation_id') == $designation->id) selected="selected" @endif>{{$designation->name}}</option>
                                                       @endforeach
                                                   </select>
                                                   @if($errors->has('designation_id'))
                                                       <span class="invalid-feedback" role="alert">
                                                   <label class="text-red text-sm">{{ $errors->first('designation_id') }}</label>
                                               </span>
                                                   @endif
                                               </div>
                                               <div class="col-md-2">
                                                   <label class="col-form-label text-sm">Assign Date:</label><span class="text-danger float-right mt-2">*</span>
                                               </div>
                                               <div class="col-md-4">
                                                   <input type="date" class="form-control d-inline-block{{ $errors->has('assign_date') ? 'is-invalid': '' }} text-sm" autofocus name="assign_date" value="{{ old('assign_date') }}" placeholder="Enter assign date here">
                                                   @if($errors->has('assign_date'))
                                                       <span class="invalid-feedback" role="alert">
                                                    <label class="text-red text-sm">{{ $errors->first('assign_date') }}</label>
                                                </span>
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
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

                                                   <select class="custom-select form-control text-sm" id="role" name="role">
                                                       <option class="disabled text-sm">- Select Role -</option>
                                                       @foreach($roles as $role)
                                                           <option value="{{$role ->id}}">{{$role->name}}</option>
                                                       @endforeach
                                                   </select>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="row mt-5">
                                   <div class="col-md-8"></div>
                                   <div class="col-md-2">
                                               <button type="reset" class="btn btn-default mt-3 form-control">Reset</button>
                                           </div>
                                   <div class="col-md-2">
                                               <button type="submit" class="btn btn-info mt-3 form-control">Add</button>
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







