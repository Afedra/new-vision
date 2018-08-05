<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				NEW ADVERT
			</div>
			<div class="panel-body">
				<div class="row">
					<?php if(isset($message)) { echo $message; } ?>
					<form action="?page=user_advert" method="post" role="form">
						<div class="form-group">
							<label for="advertDatetime" class="col-sm-2 control-label">Advert Datetime</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="advert_datetime" id="id_advertDatetime" placeholder="Advert Date" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="mention" class="col-sm-2 control-label">Mention</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="mention" id="id_mention" placeholder="Mention">
							</div>
						</div>
						<div class="form-group">
							<label for="airtime" class="col-sm-2 control-label">Airtime</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="airtime" id="id_airtime" placeholder="Airtime">
							</div>
						</div>
						<div class="form-group">
							<label for="spot_no" class="col-sm-2 control-label">Spot Number</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="spot_no" id="id_number" placeholder="Spot Number">
							</div>
						</div>
						<div class="form-group">
							<label for="page_size" class="col-sm-2 control-label">Page Size</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="page_size" id="id_page_size" placeholder="Page Size" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="details" class="col-sm-2 control-label">Details</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="details" id="id_details" placeholder="Details" required="required"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="client_no" class="col-sm-2 control-label">Client Number</label>
							<div class="col-sm-10">
								<select class="form-control" name="client_no" role="client_no">
									<?php								
										$q = "SELECT * FROM client";
										$r = $dbc->query($q);
										
										if($r && $r->num_rows > 0)
										{									
											while($list = $r->fetch_assoc())
											{
									?>							
											<option value="<?php echo $list['ClientNo']; ?>"><?php echo $list['Fname']; ?> <?php echo $list['Lname']; ?> </option>
									<?php 	}
										}
										else 
										{
										?>
											<option value="0">No Clients</option>									
									<?php } ?>
								</select>
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
			