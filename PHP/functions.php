<?php 



function fix_name($name){
	$name=trim($name);
	$name=ucfirst($name);
	$name=addslashes($name);
	return $name;
}

function fix_email($email){
	$email=trim($email);
	$email=ucfirst($email);
	$$email=addslashes($email);
	return $email;
}

function fix_address($adress){
	$adress=trim($adress);
	$adress=ucfirst($adress);
	$$adress=addslashes($adress);
	return $adress;
}

function fix_rollno($rollno){
	$rollno=trim($rollno);
	$rollno=ucfirst($rollno);
	$$rollno=addslashes($rollno);
	return $rollno;
}


?>