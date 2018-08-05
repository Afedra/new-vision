<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> MANAGER DETAILS </title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="jquery/jquery.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body style="background-color:blue;">
		<div class="container">
			<h1 style="text-align:center;font-size:60px;"><b style="text-align:center;color:#fff;background-color:red;">NEW VISION</b></h1>
			<div class="row">
				<div class="col-lg-12">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#branch" aria-controls="branch" role="tab" data-toggle="tab">Branch Details</a>
						</li>
						<li role="presentation">
							<a href="#manager" aria-controls="manager" role="tab" data-toggle="tab">Manager Form</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tabpanel" class="tab-panel fade active" id="branch">
							<form class="form-horizontal" method="POST" action="" role="form">
								<div class="col-md-6">
									<div class="form-group">
										<label for="staff_id" class="col-sm-2 control-label">StaffID</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="staff_id" id="id_staff_id" placeholder="Staff Id" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="branch_id" class="col-sm-2 control-label">BranchID</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="branch_id" id="id_branch_id" placeholder="Branch Id" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="fname" class="col-sm-2 control-label">Fname</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="fname" id="id_fname" placeholder="First Name" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="lname" class="col-sm-2 control-label">Lname</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="lname" id="id_lname" placeholder="Last Name" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="dob" class="col-sm-2 control-label">DOB</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" name="dob" id="id_dob" placeholder="Date of Birth" required="required">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="start_date" class="col-sm-2 control-label">Start Date</label>
										<div class="col-sm-10">
											<input type="date" class="form-control" name="start_date" id="id_start_date" placeholder="Staff Date" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="salary" class="col-sm-2 control-label">Salary</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="salary" id="id_salary" placeholder="Salary" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="car_allowance" class="col-sm-2 control-label">Car Allowance</label>
										<div class="col-sm-10">
											<select class="form-control" role="car_allowance">
												<option>Yes</option>
												<option selected="selected">No</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button class="btn btn-danger" type="submit">Submit</button>
										</div>
									</div>											
								</div>
							</form>
						</div>

						<div class="tabpanel" class="tab-panel fade" id="manager">
							<form method="POST" action="" role="form">
								<div class="col-md-12">
									<div class="form-group">
										<label for="branch_id" class="col-sm-2 control-label">BranchID</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" name="branch_id" id="id_branch_id" placeholder="Branch Id" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="street" class="col-sm-2 control-label">Street</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="street" id="id_street" placeholder="Street" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="city" class="col-sm-2 control-label">City</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="city" id="id_city" placeholder="Branch Id" required="required">
										</div>
									</div>
									<div class="form-group">
										<label for="zone" class="col-sm-2 control-label">Zone</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="zone" id="id_zone" placeholder="Zone" required="required">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button class="btn btn-danger" type="submit">Submit</button>
										</div>
									</div>		
								</div>
							</form>
						</div>			
					</div>
				</div>
			</div>			
		</div>			
	</body>
</html>