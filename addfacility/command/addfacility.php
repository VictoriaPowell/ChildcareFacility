<?php
$facilityID = $phoneNumber = $address = $pass1 = $pass2 = "";
function executeaddfacility(){
		global $facilityID , $phoneNumber , $address , $pass1 , $pass2 ;

		if(!empty($_POST['facilityID']))
			$facilityID = trim($_POST['facilityID']);
	
		if(!empty($_POST['address']))
			$address = $_POST['address'];
	
		if(!empty($_POST['phoneNumber']))
			$phoneNumber = trim($_POST['phoneNumber']);
	
		if(!empty($_POST['pass1']))
			$pass1 = trim($_POST['pass1']);
	
		if(!empty($_POST['pass2']))
			$pass2 = trim($_POST['pass2']);
	
		return validateRegister() && executeRegisterCommand();
}

function validateRegister() {
		
		global $facilityID , $phoneNumber , $address , $pass1 , $pass2, $ErrorMessages;
		if(empty($facilityID)) $ErrorMessages['facilityID'] = 'facility ID may not be blank.';
		if(empty($address)) $ErrorMessages['address'] = 'address may not be blank.';
		if(empty($phoneNumber)) $ErrorMessages['phoneNumber'] = 'Phone may not be blank.';

		if(empty($pass1) || strcmp($pass1, $pass2)) $ErrorMessages['pass1'] = 'Password fields must match.';
	
		return empty($ErrorMessages);
		
}
function executeRegisterCommand() {
		global $facilityID , $phoneNumber , $address , $pass1 , $pass2, $ErrorMessages;
		// Create connection
		$con=mysqli_connect("clipper.encs.concordia.ca","jac353_4","honeydew","jac353_4");
		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$check = mysqli_query($con,"SELECT * FROM users WHERE ID = ".$facilityID);
			if($check){
				
				$row = mysqli_fetch_array($check);
				$length = count($row);
				if($length>0){
					
					$ErrorMessages['exist'] ="facility already exist in data base ";
					return false;
					     }
				else{
					
					addFacility();
					return true;
				    } 
				 
			}
			else{
					
					addFacility();
					return true;
			    }
		}
}
function addFacility(){
		global $facilityID , $phoneNumber , $address , $pass1 , $pass2 ;
		// Create connection
		$con=mysqli_connect("clipper.encs.concordia.ca","jac353_4","honeydew","jac353_4");
		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_query($con,"insert into users values (".$facilityID.",'".$pass1."')");
		mysqli_query($con,"insert into Facility values (".$facilityID.",'".$address."','".$phoneNumber."')");
}
?>
