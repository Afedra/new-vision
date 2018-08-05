<?php

function randomnumber()
{	
	return uniqid();
}

function data_user($dbc, $id) {
			
	$q = "SELECT * FROM Staff WHERE email = '$id'";	
	$r = $dbc->query($q);
	
	$data = $r->fetch_assoc();
	$data['fullname'] = $data['Fname'].' '.$data['Lname'];
	$data['fullname_reverse'] = $data['Lname'].', '.$data['Fname'];		
		
	return $data;
	
}

?>