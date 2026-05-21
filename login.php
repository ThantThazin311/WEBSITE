<?php 
if(isset($_POST['submit']))
{
	$username=$_POST['name'];
	$pass=$_POST['password'];
	if($username=="admin" && $pass=="123"){
		header("location:admin/index1.php") ;
	}
	else{
		header("location:index.php") ;
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="" method="post" >
<h1 align="center">Sign in</h1>
<div id="main"> 
<table>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="index.php">Back</a>
		<input type="submit" name="submit" id="but" value="login"></td>
		
	</tr>
</table>
</form>

</div>
</body>
</html>\