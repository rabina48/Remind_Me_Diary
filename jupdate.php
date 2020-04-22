<?php

	include_once'dbh.inc.php';
	if (isset($_POST['delet'])) {

	$delete=$_POST['journal_ID'];
  $delete=mysqli_query($conn,"DELETE FROM tbl_journal WHERE journal_ID='$delete'");
  if($delete)
  {		echo$delete;
	  header("Location:jupdate_table.php");
  }
  else
  {
	  echo "mysql_error()";
  }
	}
else
{
	$sql="UPDATE tbl_journal SET date='".$_POST["date"]."',expenditure='".$_POST["expenditure"]."',income='".$_POST["income"]."',profit='".$_POST["profit"]."' WHERE journal_ID=$_POST[journal_ID]";
	
	mysqli_query($conn,$sql);
//executed query

if(mysqli_query($conn,$sql)){
			header("Location: page_end.php?update=success");
			exit();
}
	else
		echo"Not updated";
}