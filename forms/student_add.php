<?php
require '../db/action.php';

if(isset($_POST['add_student'])){
	$data=[];
	foreach ($_POST as $name => $val){
		if($name!="add_student")
    		$data[$name] = $val;
	}
	try{
		$action = addQuery($conn,$data,'tbl_students');
		header("Location: ../index.php");
	}catch(Exception $e){
		echo "Error: $e";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<!-- JS -->
	<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body class="container mt-5">
	<h1>Add Student</h1>
	<form action="" method="post">
		<div class="mb-3">
			<label class="form-label">First Name</label>
			<input type="text" name="fname" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Middle Name</label>
			<input type="text" name="mname" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Last Name</label>
			<input type="text" name="lname" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" name="email" class="form-control" required>
		</div>
		<button type="submit" name="add_student" class="btn btn-primary w-100">Submit</button>
	</form>
</body>
</html>