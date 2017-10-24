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
				  	<form class="form-horizontal  no-margin">
				        <div class="control-group">
				            <label class="control-label" for="inputName">Nama User</label>
				              <div class="controls">
				                <input type="text" id="inputName" placeholder="Name">
				              </div>
				            </div>
				            <div class="control-group">
				              	<label class="control-label" for="inputEmail">Responses</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" id="inlineradio1" value="option1" name="optionsRadios" checked> Option 1
									</label>
										<label class="radio inline">
										<input type="radio" id="inlineradio2" value="option2" name="optionsRadios"> Option 2
									</label>
									<label class="radio inline">
										<input type="radio" id="inlineradio3" value="option3" name="optionsRadios"> Option 3
									</label>
								</div>
				            </div>
				            <div class="control-group">
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Enter emails ...">
								</div>
				            </div>
			            </div>
		            </form>
		        </div>
		    </div>
		    <div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true"> Close </button> 
				<button class="btn btn-primary"> Create </button> 
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
						@foreach ($dataUser as $user) 
					<tbody>
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td>{{$user->updated_at}}</td>
							<td><a href="{{url('baseadmin/edit/$user->id')}}">Edit</a>||
								<a href="{{url('baseadmin/delete/$user->id')}}">Hapus
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection