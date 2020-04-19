<?php

	include_once'dbh.inc.php';
	$sql="UPDATE tbl_to_do_list SET edate='".$_POST["edate"]."',ename='".$_POST["ename"]."',elocation='".$_POST["elocation"]."',etime='".$_POST["etime"]."',ecost='".$_POST['ecost']."' WHERE event_ID= $_POST['event_ID']";
	
	mysqli_query($conn,$sql);
//executed query

if(mysqli_query($conn,$sql)){
		header("header:dupdate_table.php");
		echo $sql;
		//exit;
}
	else
		echo"Not updated";