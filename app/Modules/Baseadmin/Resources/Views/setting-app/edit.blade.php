@extends('baseadmin::homeadmin', compact($dataAppName))

@section('navigation-content')
  <li><a href="{{url('baseadmin/setting-aplication_name')}}">Setting Aplication Name</a></li>
@endsection
							
<div class="row-fluid">
	<div class="span12">
        <div class="control-group">
        	<input type="hidden" name="remember_token" value="{{csrf_token()}}">
            <label class="control-label">App Name</label>
              <div class="controls">
                <input type="text" name="nama_aplication_name" id="inputName" required="">
              </div>
            </div>
            <div class="control-group">
            	<label class="control-label">App Description</label>
            	<div class="controls">
            		<input type="text" name="email_aplication_name" required="">
            	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">App Adress</label>
            	<div class="controls">
            		<input type="text" name="password_aplication_name" required="">
            	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">App Phone</label>
            	<div class="controls">
            		<input type="text" name="password_aplication_name" required="">
            	</div>
            </div>
        </div>
    </div>
</div>