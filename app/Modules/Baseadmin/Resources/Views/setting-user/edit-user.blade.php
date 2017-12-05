@extends('baseadmin::homeadmin', compact($getuser))

@section('navigation-content')
  <li><a href="{{url('baseadmin/setting-user')}}">Setting User</a></li>
  <li><a href="{{url('baseadmin/setting-user')}}">Setting Aplication Name</a></li>
  <li><a href="{{url('baseadmin/setting-user')}}"></a></li>
@endsection

@section('content')
<div class="modal-body">
  	<form class="form-horizontal  no-margin" method="post" action="{{url('baseadmin/setting-user/editUser')}}">
	{{csrf_field()}}
	<div class="row-fluid">
		<div class="span12">
	        <div class="control-group">
	        	<input type="hidden" name="remember_token" value="{{csrf_token()}}">
	            <label class="control-label">Nama User</label>
	              <div class="controls">
	                <input type="text" name="nama_user" value="{{$getuser->username}}" id="inputName" required="">
	              </div>
	            </div>
	            <div class="control-group">
	            	<label class="control-label">Email</label>
	            	<div class="controls">
	            		<input type="text" name="email_user" value="{{$getuser->email}}" required="">
	            	</div>
	            </div>
	            <div class="control-group">
	            	<label class="control-label">Password</label>
	            	<div class="controls">
	            		<input type="text" name="password_user" required="">
	            	</div>
	            </div>
	            <div class="control-group">
            		<label class="control-label">Level Akses</label>
	            	<div class="controls">
	            		<select class="form-control" name="level_akses">
	            			<option value="">Pilih Akses</option>
	            			<option value="admin">Admin</option>
	            			<option value="superadmin">SuperAdmin</option>
	            		</select>
	            	</div>
	            </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"> Save </button> 
		<button class="btn btn-primary"> Cancel </button> 
	</div>
	</form>
</div>
@endsection