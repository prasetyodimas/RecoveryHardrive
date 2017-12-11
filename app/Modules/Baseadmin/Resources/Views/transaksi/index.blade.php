@extends('baseadmin::homeadmin')

@section('navigation-content')
  <li><a href="{{url('baseadmin/setting-aplication_name')}}">Transaksi</a></li>
@endsection

@section('content')
<!-- Modal -->
<div class="widget-body">
	<div id="createFilter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="createFilterLabel" aria-hidden="true">
	    <div class="modal-header">
	      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button> 
	      	<h4 id="createFilterLabel">Tambah Aplication Name</h4>
	    </div>
		<div class="modal-body">
		  	<form class="form-horizontal no-margin" method="post" action="{{url('baseadmin/setting-app/')}}">
			{{csrf_field()}}
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
				<table class="table table-condensed table-striped table-bordered table-hover no-margin" id="">
					<thead>
						<tr>
							<th>No</th>
							<th>App Name </th>
							<th>App Description</th>
							<th>App Location</th>
							<th>App Email</th>
							<th>App Phone</th>
							<th>Create At</th>
							<th>Update At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$(document).ready(function(){

	});
</script>
@endpush