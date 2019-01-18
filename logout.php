<?php
include_once 'include/setup.php';

unset($_SESSION['ID']);
session_destroy();

header("Location: index.php");

?>
