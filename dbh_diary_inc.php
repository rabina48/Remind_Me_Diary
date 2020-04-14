<?php
	

	include_once 'dbh.inc.php';
	
	
	$date=$_POST['date'];
	$time= $_POST['time'];
	$place=$_POST['place'];
	$description=$_POST['description'];
	$plan=$_POST['plan'];
	

	$sql= "INSERT INTO tbl_diary (date,time,place,description,plan )  VALUES ('$date', '$time', '$place', '$description'  ,'$plan ')";
	echo $sql;
		if ($conn->query($sql)){
			header("Location: diary.html?signup=success");
			exit();
		}
		
		else
		{echo "Error".$sql."<br>".$conn->error;}
	
	$conn->close();


?>