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



	
	
	$link=mysqli_connect('localhost','root','root','AIKTC');
if(!$link){
	echo '<br>Unable to connect to Databases.'.mysqli_connect_error();
}

$query="select * from Students";
$result= mysqli_query($link, $query);
mysqli_close($link);
if(!$result){
	echo "<br>".mysqli_error($link);
}
else{
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

	





</body>
</html>