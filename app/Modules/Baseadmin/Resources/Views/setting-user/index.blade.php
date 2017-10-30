@extends('baseadmin::homeadmin', compact($dataUser))

@section('navigation-content')
  <li><a href="#">Setting User</a></li> 
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
			<div class="row-fluid">
				<div class="span12">
				  	<form class="form-horizontal  no-margin" method="post">
				        <div class="control-group">
				            <label class="control-label">Nama User</label>
				              <div class="controls">
				                <input type="text" name="nama-user" id="inputName" required="">
				              </div>
				            </div>
				            <div class="control-group">
				            	<label class="control-label">Email</label>
				            	<div class="controls">
				            		<input type="text" name="email-user" required="">
				            	</div>
				            </div>
				            <div class="control-group">
				            	<label class="control-label">Password</label>
				            	<div class="controls">
				            		<input type="text" name="password" required="">
				            	</div>
				            </div>
				            <div class="control-group">
				            	<div class="controls">
				            		<label class="control-label">Level Akses</label>
				            		<option value="">Pilih</option>
				            	</div>
				            </div>
			            </div>
		            </form>
		        </div>
		    </div>
		    <div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true"> Tutup </button> 
				<button class="btn btn-primary"> Tambah </button> 
			</div>
	    </div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
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
							<th>Create At</th>
							<th>Update At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dataUser as $user) 
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td>{{$user->updated_at}}</td>
							<td><a href="baseadmin/edit/{{$user->id}}">Edit</a> ||
								<a href="baseadmin/delete/{{$user->id}}">Hapus
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection