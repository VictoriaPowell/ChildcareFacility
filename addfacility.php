<?php
include_once 'include/setup.php';
include_once 'addfacility/command/addfacility.php';
if(!strcasecmp($_SERVER['REQUEST_METHOD'], "get") || !executeaddfacility()) {
	$targetContent= 'addfacility/template/addfacility.php';
} else {
	$targetContent = 'addfacility/template/success.php';
}
include_once 'include/GenericTemplate.php';
?>
