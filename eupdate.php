<?php

	include_once'dbh.inc.php';
if (isset($_POST['delet'])) {
	echo"lala";
	$delete=$_POST['event_ID'];
  $delete=mysqli_query($conn,"DELETE FROM tbl_event WHERE event_ID='$delete'");
  if($delete)
  {		echo$delete;
	  header("Location:eupdate_table.php");
  }
  else
  {
	  echo "mysql_error()";
  }
	}
else
{ $edate=$_POST['edate'];
	$ename=$_POST['ename'];
	$elocation=$_POST['elocation'];
	$etime = $_POST['etime'];
	$ecost = $_POST['ecost'];
	$event_ID =$_POST['event_ID'];
	
	$sql="UPDATE tbl_event SET edate='$edate',ename='$ename',elocation='$elocation',etime='$etime',ecost='$ecost'].' WHERE event_ID='$event_ID' ";
	
	mysqli_query($conn,$sql);
//executed query
	
if(mysqli_query($conn,$sql)){
	echo $sql;
	header("Location: page_end.php?update=success");
			exit();
}
	else
	{echo"Not updated";}

}