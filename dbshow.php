<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<marquee direction=right><h2>Student Information Center</h2></marquee>
<div id="main">
<table>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Roll No.</th>
		<th>Reg No.</th>
		<th>Department</th>
	</tr>
<?php
	$user = "root";
	$pass = "";
	$db = "reg";
	$link = mysqli_connect("localhost", $user, $pass, $db)or die("Couldn't connect to MySQL: ".mysqli_error() );
	//mysql_select_db($db, $link) or die ("Couldn't open $db: ".mysql_error());

	$result = mysqli_query($link, "SELECT * FROM student")or die("Error1".mysqli_error());
	$num_rows=mysqli_num_rows($result);


	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>\n";
		foreach ($a_row as $field) {
			print "\t<td>".stripslashes($field)."</td>\n";
		} 
		print "</tr>\n";
	}

	mysqli_close($link);
?>

</table>

<div id="link">
<a href="#">About</a>
<a href="admin/index.php">Admin</a>
<a href="#">Online</a>
</div>
</div>
</body>
</html>