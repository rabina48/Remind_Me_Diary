<?php
	

	include_once 'dbh.inc.php';
	
	
	
	$list= $_POST['list'];
	$material=$_POST['material'];
	$plan =$_POST['plan'];
	$sql= "INSERT INTO tbl_to_do_list (list,material_required )  VALUES ('$list','$material')";
	
		if ($conn->query($sql)){
			//header("Location: to_do.html?signup=success");
			echo $sql;
			exit();
			
		}
		
		else
		{echo "Error".$sql."<br>".$conn->error;}
	
	$conn->close();
?>