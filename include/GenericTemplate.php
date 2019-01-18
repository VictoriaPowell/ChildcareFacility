<?php
if(!isset($targetContent)) {
	$targetContent = "include/static/index.php";
}

?><!DOCTYPE html>
<html>
	<head> 
	<title>Centres de la petite enfance et garderies</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
    <body >
	<div>
		<header>
				
				<nav id="nav"><!..top menu..>
				<?php 
				if(!empty($_SESSION['ID'])) { ?>
				<a href="logout.php">Logout</a>
				<?php
				} else { ?>
				<a href="login.php">Login</a>
				<a href="index.php">Register</a>
				<?php
				}
				
				?>
				</nav>
			</header>
		 <?php 
		if(!empty($_SESSION['ID'])) { ?>
		    <div id="sideMenu">
		<?php 
				if($_SESSION['ID']==30) { ?>
				<a href="addfacility.php">add facilities</a><br />
				<?php
				} ?>
				
				<a href="index.php">queries</a>
		   </div>
				
		<?php
				} ?>
		
		
		<div id="content">
                     <?php include_once $targetContent ;?>
		</div>
		
		<footer> 
		</footer>
    </div>
	</body>
</html>

