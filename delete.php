<?php
	include("db.php");

	$getid = $_GET['id'];

	$sql = "DELETE FROM `staffs` WHERE `id` = '$getid'"; 
	$query = mysqli_query($connect, $sql);

	if($query) { header("location: test.php"); }
?>