<?php
require 'db/action.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- JS -->
	<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body class="container mt-5">
	<div class="row">
		<div class="col-10">
			<h1>Students</h1>
		</div>
		<div class="col-1">
			<a class="btn btn-primary" href="forms/student_add.php">ADD</a>
		</div>
		<div class="col-1">
			<button id="showStudentForm" class="btn btn-success">ADD(AJAX)</button>
		</div>
	</div>
	
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Middle</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody id="student_tblBody">
		</tbody>
		<tfoot>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Middle</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
		</tfoot>
	</table>
	<?php include 'forms/student_form.php'; ?> 
	<script type="text/javascript">
		var studentFormDiv = document.getElementById("studentFormDiv");
		var btnStudentForm = document.getElementById('showStudentForm');
		btnStudentForm.addEventListener('click',function(){
			studentFormDiv. classList.remove("d-none");
		})
		function showAllStudent(){
			$.post('db/ajax.php','showAllStudent',function(res){
				$('#student_tblBody').html(res);
		})
		}showAllStudent();
	</script>
</body>
</html>





