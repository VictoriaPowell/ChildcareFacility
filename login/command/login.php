<?php
if(!isset($ID))$ID="";
if(!isset($pass1))$pass1="";


//Search for the userID and password in the database
function executeLogin() {
	global $ID, $pass1,$ErrorMessages ;
	// Create connection
	$con=mysqli_connect("clipper.encs.concordia.ca","jac353_4","honeydew","jac353_4");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$ID = $_POST['ID'];
	 	$pass1 = trim($_POST['pass1']);
		$check = mysqli_query($con,"SELECT * FROM users WHERE ID = ".$ID." AND password ='".$pass1."'");
		if($check){
			$row = mysqli_fetch_array($check);
			$length = count($row);
			if($length>0){
				$_SESSION['ID'] =$ID;
				return true;
				     }
			else{
				$ErrorMessages['email'] = "No email and password matching what you provided was found.";
				return false;
			    } 
	        }
		else{
				$ErrorMessages['email'] = "No email and password matching what you provided was found.";
				return false;
		    }
	}

}

?>
