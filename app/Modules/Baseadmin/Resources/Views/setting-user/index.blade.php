@extends('baseadmin::homeadmin')

@section('navigation-content')
  <li><a href="#">Setting User</a></li> 
@endsection

@section('content')
<!-- Modal -->
<div id="createFilter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="createFilterLabel" aria-hidden="true">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button> 
	  <h4 id="createFilterLabel">Create</h4>
	</div>
	<div class="modal-body">
	  <div class="row-fluid">
	    <div class="span12">
	      <form class="form-horizontal  no-margin">
	        <div class="control-group">
	          <label class="control-label" for="inputName">Name</label>
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
	      </form>
	    </div>
	  </div>
	</div>
	<div class="modal-footer">
	  <button class="btn" data-dismiss="modal" aria-hidden="true">
	    Close
	  </button>
	  <button class="btn btn-primary">
	    Create
	  </button>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-header">
				<div class="title">Setting User</div>
			</div>
			<div class="widget-body">
				<div class="widget-body">
					<button id="#createFilter" class="btn btn-large btn-warning2" data-toggle="modal" data-original-title>Tambah User</button>
				</div>
				<table class="table table-condensed table-striped table-bordered table-hover no-margin">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection