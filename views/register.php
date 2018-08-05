<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				STAFF MANAGER
			</div>
			<div class="panel-body">
				<div class="row">
					<?php if(isset($message)) { echo $message; } ?>
					<form action="?page=register" method="post" role="form">
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
							<label for="branch_id" class="col-sm-2 control-label">BranchID</label>
							<div class="col-sm-10">
								<select class="form-control" name="branch_id" role="branch_id">
									<?php								
										$q = "SELECT BranchID, street FROM branch";
										$r = $dbc->query($q);
										
										if($r)
										{									
											while($list = $r->fetch_assoc())
											{
									?>							
											<option value="<?php echo $list['BranchID'] ?>"><?php echo $list['street'] ?> Branch</option>
									<?php 	}
										}
										else 
										{
										?>
											<option value="0">No Branch Available</option>									
									<?php } ?>
								</select>
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
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
			