@extends('baseadmin::homeadmin', compact($dataUser))

@section('navigation-content')
  <li><a href="{{url('baseadmin/setting-user')}}">Setting User</a></li>
  <li><a href="{{url('baseadmin/setting-user')}}">Setting Aplication Name</a></li>
  <li><a href="{{url('baseadmin/setting-user')}}"></a></li>
@endsection

@section('content')
<!-- Modal -->
<div class="widget-body">
	<div id="createFilter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="createFilterLabel" aria-hidden="true">
	    <div class="modal-header">
	      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button> 
	      	<h4 id="createFilterLabel">Tambah User</h4>
	    </div>
	    
		<div class="modal-body">
		  	<form class="form-horizontal  no-margin" method="post" action="{{url('baseadmin/setting-user/addUser')}}">
			{{csrf_field()}}
			<div class="row-fluid">
				<div class="span12">
			        <div class="control-group">
			        	<input type="hidden" name="remember_token" value="{{csrf_token()}}">
			            <label class="control-label">Nama User</label>
			              <div class="controls">
			                <input type="text" name="nama_user" id="inputName" required="">
			              </div>
			            </div>
			            <div class="control-group">
			            	<label class="control-label">Email</label>
			            	<div class="controls">
			            		<input type="text" name="email_user" required="">
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
				<button class="btn" data-dismiss="modal" aria-hidden="true"> Tutup </button> 
				<button class="btn btn-primary"> Tambah </button> 
			</div>
        </form>
	    </div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			@if (Session::has('message-failed'))
			  <div class="alert alert-block alert-danger fade in">
				<button type="button" data-dismiss="alert" class="close">x</button>
				<h5 class="alert-heading">{{ Session::get('message-failed')}}</h4>
			  </div>
	        @elseif(Session::has('message-success'))
	          <div class="alert alert-block alert-success fade in">
	            <button type="button" data-dismiss="alert" class="close">x</button>
	            <h5 class="alert-heading">{{ Session::get('message-success')}}</h5>
	          </div>
	        @endif
			<div class="widget-body">
				<div class="widget-body">
  					<a href="#createFilter" role="button" class="btn btn-warning2" data-toggle="modal"> Tambah User </a>
				</div>
				<table class="table table-condensed table-striped table-bordered table-hover no-margin">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama User</th>
							<th>Email</th>
							<th>Level</th>
							<th>Create At</th>
							<th>Update At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						@foreach ($dataUser as $user) 
						<tr>
							<td>{{$no}}</td>
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->level}}</td>
							<td>{{$user->created_at}}</td>
							<td>{{$user->updated_at}}</td>
							<td>
								<a href="{{url('baseadmin/setting-user/editUser/'.$user->id.'')}}"> Edit</a> ||
								<a href="{{url('baseadmin/setting-user/deleteUser/'.$user->id.'')}}"> Hapus</a>
							</td>
						</tr>
						<?php $no++;?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection