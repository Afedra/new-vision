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
					<form action="?page=staff_register" method="post" role="form">
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
							<label for="staff_level" class="col-sm-2 control-label">Staff Level</label>
							<div class="col-sm-10">
								<select class="form-control" name="staff_level" role="staff_level">
									<?php								
										$q = "SELECT Staff_level, Staff_Identity FROM level";
										$r = $dbc->query($q);
										
										if($r)
										{									
											while($list = $r->fetch_assoc())
											{
												if($list['Staff_level'] == 1)
												{
													
												} else {
									?>							
											<option value="<?php echo $list['Staff_level'] ?>"><?php echo $list['Staff_Identity'] ?></option>
									<?php 		}
											}
										}
										else
										{
										?>
											<option value="0">Level Unavialable</option>									
									<?php } ?>
								</select>
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
							<label for="start_date" class="col-sm-2 control-label">Start Date</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="start_date" id="id_start_date" placeholder="Start Date" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="salary" class="col-sm-2 control-label">Salary</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="salary" id="id_salary" placeholder="Salary" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email Address</label>
							<div class="col-sm-10">
								<input class="form-control" type="email" name="email" id="email" placeholder="Email Address" autocomplete="off">
							</div>					
						</div>						
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input class="form-control" type="password" name="password" id="password" value="" placeholder="Password" autocomplete="off">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2"><b>Allowance</b></div>
							<div class="col-sm-10 checkbox">
								<label>
									<input type="checkbox" value="1" name="carAllowance">Car Allowance
								</label>
							</div>				
							<div class="col-sm-2"></div>
							<div class="col-sm-10 checkbox">
								<label>
									<input type="checkbox" value="1" name="transportAllowance">Transport Allowance
								</label>
							</div>				
							<div class="col-sm-2"></div>
							<div class="col-sm-10 checkbox">
								<label>
									<input type="checkbox" value="1" name="computerAllowance">Computer Allowance
								</label>
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
	<div class="col-lg-2"></div>
</div>
