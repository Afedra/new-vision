<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				ADD BRANCH
			</div>
			<div class="panel-body">

			<div class="row">
				<?php if(isset($message)) { echo $message; } ?>
				<form action="?page=branch" method="post" role="form">
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
						<label for="phone_no" class="col-sm-2 control-label">Phone No</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="phone_no" id="id_phone_no" placeholder="Phone Number" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" id="id_email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-danger" type="submit">Submit</button>
						</div>
					</div>		
					
				</form>
			</div>
		</div>
	</div>
</div>
				