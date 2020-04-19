<html>
<head>
<title>Update records</title>
<link rel="stylesheet" type="text/css" href="style.css"

</head>
<body>
<?php
	include_once'dbh.inc.php';
	
	//select query
	$sql= "SELECT * FROM tbl_event";
	
	//execute the query
	$records = mysqli_query($conn,$sql);
?>

<table>	

	<tr>
		<th>Event Date</th>
		<th> Event Name</th>
		<th> Event Location</th>
		<th>Event Time</th>
		<th> Event Cost</th>
	</tr>

	
	<?php
	while($row =mysqli_fetch_array($records))
		{
			echo"<tr><form id=contact-form action= eupdate.php method=post>";
			echo "<td> <input type=date  name=edate value='".$row['edate']."'></td>";
			echo "<td> <input type=text  name=ename value='".$row['ename']."'></td>";
			echo "<td> <input type=text  name=elocation value='".$row['elocation']."'></td>";
			echo "<td> <input type=time name=etime value='".$row['etime']."'></td>";
			
			echo"<td>  <input type=number  name=ecost value='".$row['ecost']."'></td>";
			echo"<td> <input type=hidden 	name=event_ID value='".$row['event_ID']."'>";
			echo"<td><button type=submit name=submit >Update</button></td> ";
			
			echo"<td><button type=submit name=delet >delete</button></td> ";
			
			echo"</form></tr>";
			
	}
	?>
</body>
</html>