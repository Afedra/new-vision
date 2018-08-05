<?php 

# Start Session:
session_start();

require_once 'functions/lib.php';

$dbc = Install::Instance();
$dbc->Start();
$dbc = Install::DatabaseConnection();

if($_POST) {
	
	$q = "SELECT * FROM Staff WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$r = $dbc->query($q);
	
	if($r->num_rows == 1) {
		$list = $r->fetch_assoc();
		$_SESSION['level'] = $list['Staff_level'];
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');		
	}	
}


?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> LOGIN </title>
		<link href="static/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="static/jquery/jquery.min.js" type="text/javascript"></script>
		<script src="static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Custom Fonts -->
		<link href="static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">		
	</head>
	<body >
	<div id="wrap">		
			
		<div class="container">
			<h1 style="text-align:center;font-size:60px;"><b style="text-align:center;color:#fff;background-color:red;">NEW VISION</b></h1>			
			<div class="row">

				<div class="col-md-4 col-md-offset-4">
				
					<div class="panel panel-info">
					
						<div class="panel-heading">
							<strong style="text-align:center;font-size:45px;"><b style="text-align:center;color:black;background-color:yellow;">STAFF LOGIN</b></strong>
						</div><!-- END panel-heading -->
						
						<div class="panel-body">
						
							<form action="login.php" method="post" role="form">
								
							  <div class="form-group">
							    <label for="email" style = "text-align:center">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
							  </div>
							  
							  <div class="form-group">
							    <label for="password">Password</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  </div>

							  <button type="submit" class="btn btn-default" style = "background-color:red">Submit</button>
							  
							</form>
						
						</div><!-- END panel-body -->
					
					</div><!-- END panel -->				
					
				</div><!-- END col -->
				
								
			</div><!-- END row -->
			
		
			
		</div><!-- END container -->

	</div><!-- END wrap -->		
	
</body>

</html>