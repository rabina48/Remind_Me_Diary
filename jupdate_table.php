<html>
<head>
<title>Update records</title>
<link rel="stylesheet" type="text/css" href="style.css"

</head>
<body>
<?php
	include_once'dbh.inc.php';
	
	//select query
	$sql= "SELECT * FROM tbl_journal";
	
	//execute the query
	$records = mysqli_query($conn,$sql);
?>

<table>	

	<tr>
		<th>Date </th>
		<th> Expenditure</th>
		<th> Income</th>
		<th> profit</th>
		
	</tr>

	
	<?php
	while($row =mysqli_fetch_array($records))
		{
			echo"<tr><form id=contact-form action=jupdate.php method=post>";
			echo "<td> <input type=date  name=date value='".$row['date']."'></td>";
			echo "<td> <input type=number  name=expenditure value='".$row['expenditure']."'></td>";
			echo "<td> <input type=number  name=income value='".$row['income']."'></td>";
			echo "<td> <input type=number  name=profit value='".$row['profit']."'></td>";
			echo"<td> <input type=hidden 	name=journal_ID value='".$row['journal_ID']."'>";
			echo"<td><button type=submit name=submit >Update</button></td> ";
			echo"<td><button type=submit name=delet >delete</button></td> ";
			echo"</form></tr>";
			
	}
	?>
</body>
</html>