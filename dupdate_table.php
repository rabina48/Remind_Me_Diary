<html>
<head>
<title>Update records</title>
<link rel="stylesheet" type="text/css" href="style.css"

</head>
<body>
<?php
	include_once'dbh.inc.php';
	
	//select query
	$sql= "SELECT * FROM tbl_diary";
	
	//execute the query
	$records = mysqli_query($conn,$sql);
?>

<table>	

	<tr>
		<th>Date </th>
		<th> Time</th>
		<th> Place</th>
		<th>Description</th>
		<th> Plan</th>
	</tr>

	
	<?php
	while($row =mysqli_fetch_array($records))
		{
			echo"<tr><form id=contact-form action= dupdate.php method=post>";
			echo "<td> <input type=date  name=date value='".$row['date']."'></td>";
			echo "<td> <input type=time name=time value='".$row['time']."'></td>";
			echo "<td> <input type=text  name=place value='".$row['place']."'></td>";
			echo "<td> <input type=text  name=description value='".$row['description']."'></td>";
			echo"<td>  <input type=text  name=plan value='".$row['plan']."'></td>";
			echo"<td> <input type=hidden name=diary_ID value='".$row['diary_ID']."'>";
			echo"<td><button type=submit name=submit >Upload</button></td> ";
			echo"<td><button type=submit name=delete >delete</button></td> ";
			echo"</form></tr>";
			
	
	}
	?>
</body>
</html>