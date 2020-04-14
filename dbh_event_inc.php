<?php
	

	include_once 'dbh.inc.php';
	
	
	$edate=$_POST['edate'];
	$ename= $_POST['ename'];
	$elocation=$_POST['elocation'];
	$etime=$_POST['etime'];
	$ecost=$_POST['ecost'];
	

	$sql= "INSERT INTO tbl_event (edate,ename,elocation,etime,ecost )  VALUES ('$edate', '$ename', '$elocation', '$etime'  ,'$ecost ')";
	echo $sql;
		if ($conn->query($sql)){
			header("Location: event.html?signup=success");
			exit();
		}
		
		else
		{echo "Error".$sql."<br>".$conn->error;}
	
	$conn->close();


?>