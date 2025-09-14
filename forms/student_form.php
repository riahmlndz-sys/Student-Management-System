<div id="studentFormDiv" class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 overflow-scrol d-none">
	<div class="container p-5 mt-5 bg-white border-radius-circle">
		<button onclick="hideStudentForm()" class="position-fixed top-0 end-0 text-white border-0 bg-transparent fs-2 me-2">x</button>
		<h1>Add Student</h1>
		<form id="studentForm" action="" method="post">
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
			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary w-100">Submit</button>
		</form>
		</div>
		<script type="text/javascript">
			var studentFormDiv = document.getElementById("studentFormDiv");

			function hideStudentForm(){
			studentFormDiv.classList.add("d-none");
		}

		var studentForm = document.getElementById('studentForm');
		studentForm.addEventListener('submit',function(e){
			e.preventDefault();
			var data = $('#studentForm').serialize();
			$.ajax({
				type: "POST",
				url: "db/ajax.php",
				data: {
					data: data,
					'addStudent':true,
				},
			beforeSend: function() {
						// loader
			},
			success: function(res) {
				if(res){
					hideStudentForm();
					showAllStudent();
					// call ajax function for show data, success message, reset form
				}else{
					// error message
				}
			},
			error: function(xhr, status, error){
				console.log(xhr);
				console.log(status);
				console.log(error);
			},
			complete: function(){
				//stop loader
			}
		});
		})
	</script>
</div>
