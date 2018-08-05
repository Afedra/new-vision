<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				DEBIT ADVERT
			</div>
			<div class="panel-body">
				<div class="row">
					<?php if(isset($message)) { echo $message; } ?>
					<form action="?page=debit_advert" method="post" role="form">
						<div class="form-group">
							<label for="advertDatetime" class="col-sm-2 control-label">Advert Datetime</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="advert_datetime" id="id_advertDatetime" placeholder="Advert Date" value="<?php echo $list['advertDatetime'] ?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label for="mention" class="col-sm-2 control-label">Mention</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="mention" id="id_mention" placeholder="Mention" disabled="disabled" value="<?php echo $list['mention'] ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="airtime" class="col-sm-2 control-label">Airtime</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="airtime" id="id_airtime" placeholder="Airtime" disabled="disabled" value="<?php echo $list['airtime'] ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="spot_no" class="col-sm-2 control-label">Spot Number</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="spot_no" id="id_number" placeholder="Spot Number" disabled="disabled" value="<?php echo $list['spot_no'] ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="page_size" class="col-sm-2 control-label">Page Size</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="page_size" id="id_page_size" placeholder="Page Size" disabled="disabled" value="<?php echo $list['page_size'] ?>" >
							</div>
						</div>
						<div class="form-group">
							<label for="client_no" class="col-sm-2 control-label">Client Number</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="client_no" id="id_client_no" placeholder="Client Number" disabled="disabled" value="<?php echo $list['ClientNo'] ?>" >
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
			