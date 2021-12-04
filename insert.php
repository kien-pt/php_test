<?php
	include("db.php");
	if (isset($_POST['submit'])) {
		$staffName = $_POST['staffName'];
		$fullName = $_POST['fullName'];

		$sql = "INSERT INTO `staffs` (`staffNumber`, `fullName`) VALUES ('$staffName','$fullName');";

		$query = mysqli_query($connect, $sql);
		if ($query) header("location: test.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<style>
		<?php include 'CSS/index.css'; ?>
		<?php include 'CSS/insert.css'; ?>
	</style>
</head>
<body>
	<div id='container'>
		<div id='card'>
			<h1>Insert a new staff</h1>
			<form action="" method="POST">
				<div class="div-container">
					<div class="div-4">
						<label>Staff Number:</label>
						<input type="text" name="staffName">
					</div>
					<div class="div-8">
						<label>Full Name:</label>
						<input type="text" name="fullName">
					</div>
					<div class="div-12">
						<button type="submit" name="submit">Insert</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>