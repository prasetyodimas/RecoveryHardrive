@extends('layout.default')
@section('content')
<h4>Service</h4>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" method="post" id="">
					<div class="col-sm-12">
					 	<div class="row bs-wizard" style="border-bottom:0;">
			                <div class="col-xs-3 bs-wizard-step complete">
			                  <div class="text-center bs-wizard-stepnum">Step 1</div>
			                  <div class="progress"><div class="progress-bar"></div></div>
			                  <a href="#" class="bs-wizard-dot"></a>
			                  <div class="bs-wizard-info text-center">Registrasi</div>
			                </div>
			                
			                <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
			                  <div class="text-center bs-wizard-stepnum">Step 2</div>
			                  <div class="progress"><div class="progress-bar"></div></div>
			                  <a href="#" class="bs-wizard-dot"></a>
			                  <div class="bs-wizard-info text-center"></div>
			                </div>
			                
			                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
			                  <div class="text-center bs-wizard-stepnum">Step 3</div>
			                  <div class="progress"><div class="progress-bar"></div></div>
			                  <a href="#" class="bs-wizard-dot"></a>
			                  <div class="bs-wizard-info text-center"></div>
			                </div>
			                
			                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
			                  <div class="text-center bs-wizard-stepnum">Step 4</div>
			                  <div class="progress"><div class="progress-bar"></div></div>
			                  <a href="#" class="bs-wizard-dot"></a>
			                  <div class="bs-wizard-info text-center"></div>
			                </div>
			            </div>
						<div class="col-lg-8">
		 					<h4 class="well">Layanan Konsultasi & Services Hardrive</h4>
							<div class="row">
								<div class="col-sm-6 form-group">
									<label>First Name</label>
									<input type="text" placeholder="Enter First Name Here.." class="form-control">
								</div>
								<div class="col-sm-6 form-group">
									<label>Last Name</label>
									<input type="text" placeholder="Enter Last Name Here.." class="form-control">
								</div>
							</div>					
							<div class="form-group">
								<label>Address</label>
								<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
							</div>	
							<div class="row">
								<div class="col-sm-4 form-group">
									<label>City</label>
									<input type="text" placeholder="Enter City Name Here.." class="form-control">
								</div>	
								<div class="col-sm-4 form-group">
									<label>State</label>
									<input type="text" placeholder="Enter State Name Here.." class="form-control">
								</div>	
								<div class="col-sm-4 form-group">
									<label>Zip</label>
									<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
								</div>		
							</div>
							<div class="row">
								<div class="col-sm-6 form-group">
									<label>Title</label>
									<input type="text" placeholder="Enter Designation Here.." class="form-control">
								</div>		
								<div class="col-sm-6 form-group">
									<label>Company</label>
									<input type="text" placeholder="Enter Company Name Here.." class="form-control">
								</div>	
							</div>						
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" placeholder="Enter Phone Number Here.." class="form-control">
							</div>		
							<div class="form-group">
								<label>Email Address</label>
								<input type="text" placeholder="Enter Email Address Here.." class="form-control">
							</div>	
							<div class="form-group">
								<label>Website</label>
								<input type="text" placeholder="Enter Website Name Here.." class="form-control">
							</div>
						</div>
					</div>
				</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

