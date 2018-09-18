<!DOCTYPE html>
<html>
<head>
	<title> PHP EXAMPLE</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
		 <?php 
   			
   			echo '<h1>Welcome to PHP</h1>';
   			if($_POST){
   				$username=$_POST['username'];
   				$brand=$_POST['brand'];
   				echo "Thank You, <b>$username</b> You have voted for <b>$brand</b>";
   			}	
   			else{
   				echo <<<_END


   					<form action="example.php" method="post">
					<br><lable for="user">User Name:</lable>
					<input type="text" name="username" id="username"/><br>

					<br><lable>Please vote for your brand</lable>

					<br><lable><input type="radio" name="brand" value="Nokia"/>Nokia<br></lable>

					<br><lable><input type="radio" name="brand" value="Apple"/>Apple<br></lable>

					<br><lable><input type="radio" name="brand" value="Samsung"/>Samsung<br></lable>
					<br><lable><input type="radio" name="brand" value="Htc"/>Htc<br></lable>

					<br><lable><input type="radio" name="brand" value="Asus"/>Asus<br></lable>

					<br><lable><input type="submit"  value="Vote"/><br></lable>
 
   					</form>
_END;

   			}

		  ?>

</body>
</html>
