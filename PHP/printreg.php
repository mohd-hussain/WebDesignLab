<!DOCTYPE html>
<html>
<head>
	<title>Your Registration Info</title>

	<style>
		table{
			border: 2px solid black;
			margin-top: 50px;
		}
		table td{
			padding:4px;
		}
		table tr:nth-child(odd){
			background-color:#e1a45f;}

		table tr:nth-child(even){
			background-color:#8f94a0;  
		}
	</style>
</head>
<body>

<?php 
require_once 'functions.php';
if($_POST){
	$rollno=$_POST['rollno'];
	$name=$_POST['sname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$sem=$_POST['sem'];
	$semail=$_POST['semail'];
	$dept=$_POST['dept'];
	$batch=$_POST['batch'];
	if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($semail)&&!empty($dept)&&!empty($batch)){
    ?>
		<table align="center">
			<tr> 
				<td>Roll NO</td>
				<td><?php echo fix_rollno($rollno); ?></td>
			</tr>

		
			<tr>
				<td>Name</td>
				<td><?php echo fix_name($name); ?></td>
			</tr>

		
			<tr>
				<td>Gender</td>
				<td><?php echo $gender; ?></td>
			</tr>

			<tr>
				<td>Address</td>
				<td><?php echo $address; ?></td>
			</tr>

			<tr>
				<td>DOB</td>
				<td><?php echo $dob; ?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><?php echo fix_email($semail); ?></td>
			</tr>

			<tr>
				<td>Dept</td>
				<td><?php echo $dept; ?></td>
			</tr>

			<tr>
				<td>Batch</td>
				<td><?php echo $batch; ?></td>
			</tr>

		</table>
<?php
	}

	else{
		echo "<span>something is missing!</span>";
		header('Refresh:2, url=../registration.html');
	}
}
else{
	header('0, url=../registration.html');
}

?>


</body>
</html>