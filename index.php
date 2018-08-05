<?php

# Start the session:
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
}

//error_reporting(0);

require_once 'functions/lib.php';
require_once 'functions/data.php';

$dbc = Install::Instance();
$dbc->Start();
$dbc = Install::DatabaseConnection();

if(isset($_GET['page'])) {
	
	$page = $_GET['page']; // Set $pageid to equal the value given in the URL
	
} else {
	
	$page = 'dashboard'; // Set $pageid equal to 1 or the Home Page.	
}

switch ($page) {
	
	case 'dashboard':
	
	break;

	case 'debit_advert':
		if(isset($_GET['advertid'])) 
		{
			$advert = $_GET['advertid'];
			$q = "SELECT * FROM adverts WHERE advertID='$advert'";
			$r = $dbc->query($q);
			$list = $r->fetch_assoc();			
		} else {
			header('Location: index.php');		
		}
	break;
	
	case 'user_advert':

	if($_POST)
	{
		$advert_datetime = $dbc->real_escape_string($_POST['advert_datetime']);
		$mention = $dbc->real_escape_string($_POST['mention']);
		$airtime = $dbc->real_escape_string($_POST['airtime']);
		$spot_no = $dbc->real_escape_string($_POST['spot_no']);
		$page_size = $dbc->real_escape_string($_POST['page_size']);
		$details = $dbc->real_escape_string($_POST['details']);
		$client_no = $dbc->real_escape_string($_POST['client_no']);
				
		$q = "INSERT INTO  adverts( advertDatetime, mention, airtime, spot_no, page_size, details, ClientNo ) VALUES ( '$advertDatetime', '$mention', '$airtime', '$spot_no', '$page_size', '$details', '$client_no' )";
		$r = $dbc->query($q);
		
		if($r) 
		{
			$message = '<p class="alert alert-success">Branch added</p>';
		}
		else
		{
			$message = '<p class="alert alert-danger">Branch could not be added because: '.mysqli_error($dbc).'</p>';
			$message .= '<p class="alert alert-danger">Query:'.$q.'</p>';
		}				
	} 	

	break;
	
	case 'branch':
	
	if($_POST) 
	{
		
		$staff_ = $dbc->real_escape_string($_POST['street']);
		$street = $dbc->real_escape_string($_POST['street']);
		$city = $dbc->real_escape_string($_POST['city']);
		$zone = $dbc->real_escape_string($_POST['zone']);
		$phone_no = $dbc->real_escape_string($_POST['phone_no']);
		$email = $dbc->real_escape_string($_POST['email']);
				
		$q = "SELECT email FROM branch WHERE email='$email'";
		$r = $dbc->query($q);
		if($r && $r->num_rows > 0)
		{
			$message = '<p class="alert alert-danger">Branch Exists</p>';
		} else {
			$q = "INSERT INTO  branch( BranchID, street, city, zone, phone_no, email ) VALUES ( NULL, '$street', '$city', '$zone', '$phone_no', '$email' )";
			$r = $dbc->query($q);
			
			if($r) {
				$message = '<p class="alert alert-success">Branch added</p>';
			}
			else
			{
				$message = '<p class="alert alert-danger">Branch could not be added because: '.mysqli_error($dbc).'</p>';
				$message .= '<p class="alert alert-danger">Query:'.$q.'</p>';
			}				
		}
	

	} 	

	break;

	case 'register':
	
	if($_POST) 
	{
		
		$branch_id = $dbc->real_escape_string($_POST['branch_id']);
		if($branch_id == "0" or !$branch_id)
		{
			$message = '<p class="alert alert-danger">Please select a branch</p>';			
			
		} else {
			$fname = $dbc->real_escape_string($_POST['fname']);
			$lname = $dbc->real_escape_string($_POST['lname']);
			$street = $dbc->real_escape_string($_POST['street']);
			$city = $dbc->real_escape_string($_POST['city']);
			$zone = $dbc->real_escape_string($_POST['zone']);
			
			$q = "INSERT INTO  client( street, city, zone, Fname, Lname, BranchID ) VALUES ( '$street', '$city', '$zone', '$fname', '$lname' , '$branch_id')";
			$r = $dbc->query($q);
			
			if($r) 
			{
				$message = '<p class="alert alert-success">User '.$fname.' '.$lname.' added</p>';
			}
			else
			{
				$message = '<p class="alert alert-danger">User could not be added because: '.$dbc->error.'</p>';
				$message .= '<p class="alert alert-danger">Query:'.$q.'</p>';
			}
		}
	} 	

	break;
	
	case 'staff_register':
	if($_POST) 
  
	{
		
		$branch_id = $dbc->real_escape_string($_POST['branch_id']);
		if($branch_id == "0" or !$branch_id)
		{
			$message = '<p class="alert alert-danger">Please select a branch</p>';			
			
		} else {
			$staff_level = $dbc->real_escape_string($_POST['staff_level']);
			$fname = $dbc->real_escape_string($_POST['fname']);
			$lname = $dbc->real_escape_string($_POST['lname']);
			$start_date = $dbc->real_escape_string($_POST['start_date']);
			$salary = $dbc->real_escape_string($_POST['salary']);
			$email = $dbc->real_escape_string($_POST['email']);
			$password = $dbc->real_escape_string($_POST['password']);
			
			if(isset($_POST['transportAllowance']))
			{
				$transportAllowance = $dbc->real_escape_string($_POST['transportAllowance']);
			} else {
				$transportAllowance = '0';
			}
			
			if(isset($_POST['carAllowance'])) 
			{
				$carAllowance = $dbc->real_escape_string($_POST['carAllowance']);
			} else {
				$carAllowance = '0';				
			}
			
			if (isset($_POST['computerAllowance']))
			{
				$computerAllowance = $dbc->real_escape_string($_POST['computerAllowance']);
			} else {
				$computerAllowance = '0';				
			}
			
			$q = "SELECT email FROM Staff WHERE email='$email'";
			$r = $dbc->query($q);
			if($r && $r->num_rows > 0)
			{
				$message = '<p class="alert alert-danger">User Exists</p>';
			} else {
				$q = "INSERT INTO  staff( Staff_level, BranchID, Fname, Lname, StartDate, Salary, transportAllowance, carAllowance, computerAllowance, email, password ) VALUES ( '$staff_level', '$branch_id', '$fname', '$lname', '$start_date', '$salary', '$transportAllowance', '$carAllowance', '$computerAllowance' , '$email', SHA1('$password'))";
				$r = $dbc->query($q);
				
				if($r) 
				{
					$message = '<p class="alert alert-success">User '.$fname.' '.$lname.' added</p>';
				}
				else
				{
					$message = '<p class="alert alert-danger">User could not be added because: '.$dbc->error.'</p>';
					$message .= '<p class="alert alert-danger">Query:'.$q.'</p>';
				}				
			}
			
		}
	} 	
	
	break;
	
	default:
		
	break;
}


# User Setup:
$user = data_user($dbc, $_SESSION['username']);


?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $page.' |  DATA AND INFORMATION MANAGEMENT'; ?></title>
		<link href="static/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
		<script src="static/jquery/jquery.min.js" type="text/javascript"></script>
		<script src="static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Custom Fonts -->
		<link href="static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">		
		<!-- DataTables CSS -->
		<link href="static/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
		<!-- DataTables Responsive CSS -->
		<link href="static/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
		<style>	
			html,
			body {
			  height: 100%;
			  /* The html and body elements cannot have any padding or margin. */
			}
			
			/* Wrapper for page content to push down footer */
			#wrap {
			  min-height: 100%;
			  height: auto;
			  /* Negative indent footer by its height */
			  margin: 0 auto -60px;
			  /* Pad bottom by footer height */
			  padding: 60px 0 60px;
			}
			
			/* Set the fixed height of the footer here */
			#footer {
			  height: 60px;
			  background-color: #f5f5f5;
			}
		
		</style>
	</head>	
	<body>
	
		<div id="wrap">		
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">		
				<ul class="nav navbar-nav">
					<li style="background-color:#f38c8c;"><a href="?page=dashboard"><b style="color:#fff;">NEW VISION</b></a></li>					
					<li><a href="?page=dashboard">Dashboard</a></li>					
				</ul>
		
				<div class="pull-right">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname']; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav><!-- END nav -->
		<?php
			include('views/'.$page.'.php'); 
		?>
		</div><!-- END wrap -->		

		<footer id="footer" style="text-align:right;">
			<p>New Vision System 2017 @Data And Information Course Work</p>
		</footer><!-- END footer -->

	</body>

    <!-- DataTables JavaScript -->
    <script src="static/datatables/js/jquery.dataTables.min.js"></script>
    <script src="static/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="static/datatables-responsive/dataTables.responsive.js"></script>	
    <script>
    $(document).ready(function() {
        $('#dataTables-example1').DataTable({
            responsive: true
        });
        $('#dataTables-example2').DataTable({
            responsive: true
        });
        $('#dataTables-example3').DataTable({
            responsive: true
        });
        $('#dataTables-example4').DataTable({
            responsive: true
        });
        $('#dataTables-example5').DataTable({
            responsive: true
        });
    });
    </script>	
</html>