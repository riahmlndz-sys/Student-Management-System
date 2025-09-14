<?php
require 'action.php';

if(isset($_POST['addStudent'])){
	$data=[];
	parse_str($_POST['data'],$data);
	if(array_key_exists('password', $data)){
		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

	}
	try{
		echo json_encode(addQuery($conn,$data,'tbl_students'));
	}catch(Exception $e){
		echo "Error: $e";
	}
}
if(isset($_POST['showAllStudent '])){
	$students = showRecords($conn,'tbl_students');
	$student_count=0;
	$html = "";
	if(count($students)>0){
		foreach ($students as $student) {
			$html.="<tr>";
			$html.="<td>".++$student_count."</td>";
			$html.="<td>$student[1]</td>";
			$html.="<td>$student[2]</td>";
			$html.="<td>$student[3]</td>";
			$html.="<td>$student[4]</td>";
			$html.="<td>
			<a class='btn btn-warning' href='forms/student_update.php?id=$student[0]'>Update</a> 
			<a class='btn btn-danger' href='forms/student_delete.php?id=$student[0]'>Delete</a>
			</td>";
			$html.="</tr>";
		}
	}else{
		$html.="<tr><td colspan='6'>No record found.</td></tr>";
	}
	
	echo $html;
}

?>