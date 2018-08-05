        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
						<?php if($_SESSION['level'] >= "6") 
						{
						?>
                        <div class="panel-heading">STAFF 							
							<?php if($_SESSION['level'] == "8") { ?>
								<a href="?page=staff_register" class="pull-right">
									<i class="fa fa-plus"></i> New Staff
								</a>
							<?php } ?>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <thead>
                                    <tr>
                                        <th>StaffId</th>
                                        <th>Staff_level</th>
                                        <th>BranchID</th>
                                        <th>email</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Start Date</th>
                                        <th>Salary</th>
                                        <th>Transport Allowance</th>
                                        <th>Car Allowance</th>
                                        <th>Computer Allowance</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 	
										$q = "SELECT * FROM Staff";
										$r = $dbc->query($q);
									while($list = $r->fetch_assoc())
									{
								?>							
                                    <tr class="odd">
                                        <td><?php echo $list['StaffId'] ?></td>
                                        <td><?php echo $list['Staff_level'] ?></td>
                                        <td><?php echo $list['BranchID'] ?></td>
                                        <td class="center"><?php echo $list['email'] ?></td>
                                        <td class="center"><?php echo $list['Fname'] ?></td>
                                        <td class="center"><?php echo $list['Lname'] ?></td>
                                        <td class="center"><?php echo $list['StartDate'] ?></td>
                                        <td class="center"><?php echo $list['Salary'] ?></td>
                                        <td class="center"><?php if($list['transportAllowance'] == '1') { echo "Yes"; } else { echo "No"; } ?></td>
                                        <td class="center"><?php if($list['carAllowance'] == '1') { echo "Yes"; } else { echo "No"; }?></td>
                                        <td class="center"><?php if($list['computerAllowance'] == '1') { echo "Yes"; } else { echo "No"; } ?></td>
                                    </tr>
								<?php 
									}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						<?php } ?>
						<?php if($_SESSION['level'] >= "2") 
						{
						?>
                        <div class="panel-heading">CLIENTS
						<?php if($_SESSION['level'] == "8") { ?>
							<a href="?page=register" class="pull-right">
								<i class="fa fa-plus"></i> New Client
							</a>
						<?php } ?>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                <thead>
                                    <tr>
                                        <th>ClientNo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Street</th>
                                        <th>City</th>
                                        <th>Zone</th>
                                        <th>BranchID</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 	
										$q = "SELECT * FROM client";
										$r = $dbc->query($q);
									while($list = $r->fetch_assoc())
									{
								?>							
                                    <tr class="odd">
                                        <td><?php echo $list['ClientNo'] ?></td>
                                        <td><?php echo $list['BranchID'] ?></td>
                                        <td class="center"><?php echo $list['Fname'] ?></td>
                                        <td class="center"><?php echo $list['Lname'] ?></td>
                                        <td class="center"><?php echo $list['street'] ?></td>
                                        <td class="center"><?php echo $list['city'] ?></td>
                                        <td class="center"><?php echo $list['zone'] ?></td>
                                    </tr>
								<?php 
									}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						<?php } ?>
	                        <div class="panel-heading">BRANCHES
							<?php if($_SESSION['level'] == "8") { ?>
								<a href="?page=branch" class="pull-right">
									<i class="fa fa-plus"></i> New Branch
								</a>
							<?php } ?>
							</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example3">
                                <thead>
                                    <tr>
                                        <th>BranchID</th>
                                        <th>Street</th>
                                        <th>City</th>
                                        <th>Zone</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 	
										$q = "SELECT * FROM branch";
										$r = $dbc->query($q);
									while($list = $r->fetch_assoc())
									{
								?>							
                                    <tr class="odd">
                                        <td><?php echo $list['BranchID'] ?></td>
                                        <td class="center"><?php echo $list['street'] ?></td>
                                        <td class="center"><?php echo $list['city'] ?></td>
                                        <td class="center"><?php echo $list['zone'] ?></td>
                                        <td class="center"><?php echo $list['phone_no'] ?></td>
                                        <td class="center"><?php echo $list['email'] ?></td>
                                    </tr>
								<?php 
									}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->					
						<?php if($_SESSION['level'] > "2") 
						{
						?>
                        <div class="panel-heading">ADVERTS
							<?php if($_SESSION['level'] == "8" or $_SESSION['level'] == "2") { ?>
							<a href="?page=user_advert" class="pull-right">
								<i class="fa fa-plus"></i> New Advert
							</a>
							<?php } ?>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example4">
                                <thead>
                                    <tr>
                                        <th>AdvertId</th>
                                        <th>Clinet Number</th>
                                        <th>Advert Date Time</th>
                                        <th>Mention</th>
                                        <th>Airtime</th>
                                        <th>Spot No</th>
                                        <th>Page Size</th>
                                        <th>Advert Order</th>
                                        <th>Sale Executive</th>
                                        <th>Amount</th>
                                        <th>Details</th>
										<?php if($_SESSION['level'] == "5" or $_SESSION['level'] == "6") { ?>
										<th></th>
										<?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 	
										$q = "SELECT * FROM adverts";
										$r = $dbc->query($q);
									while($list = $r->fetch_assoc())
									{
								?>							
                                    <tr class="odd">
                                        <td><?php echo $list['advertID'] ?></td>
                                        <td><?php echo $list['ClientNo'] ?></td>
                                        <td class="center"><?php echo $list['mention'] ?></td>
                                        <td class="center"><?php echo $list['airtime'] ?></td>
                                        <td class="center"><?php echo $list['spot_no'] ?></td>
                                        <td class="center"><?php echo $list['page_size'] ?></td>
                                        <td class="center"><?php echo $list['advert_order'] ?></td>
                                        <td class="center"><?php echo $list['sale_executiveID'] ?></td>
                                        <td class="center"><?php echo $list['amount'] ?></td>
                                        <td class="center"><?php echo $list['details'] ?></td>
										<?php if($_SESSION['level'] == "5" or $_SESSION['level'] == "6") { ?>
										<td class="center"><a href="?page=debit_advert&advertid=<?php echo $list['advertID'] ?>">Add Credit Details</a></td>
										<?php } ?>
                                    </tr>
								<?php 
									}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						<?php } ?>

						<?php if($_SESSION['level'] >= "4") 
						{
						?>
                        <div class="panel-heading">INVOICES</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example5">
                                <thead>
                                    <tr>
                                        <th>AdvertId</th>
                                        <th>Invoice No</th>
                                        <th>Reciept No</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 	
										$q = "SELECT * FROM invoice";
										$r = $dbc->query($q);
									while($list = $r->fetch_assoc())
									{
								?>							
                                    <tr class="odd">
                                        <td><?php echo $list['advertID'] ?></td>
                                        <td class="center"><?php echo $list['RecieptNo'] ?></td>
                                        <td class="center"><?php echo $list['InvoiceNo'] ?></td>
                                        <td class="center"><?php echo $list['Amount'] ?></td>
                                    </tr>
								<?php 
									}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
						<?php } ?>

						</div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
