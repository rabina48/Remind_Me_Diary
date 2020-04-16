<?php

	include_once'dbh.inc.php';
	if(isset($_POST['submit'])!="")
	{	$sql="UPDATE tbl_diary SET date='".$_POST["date"]."',time='".$_POST["time"]."',place='".$_POST["place"]."',description='".$_POST["description"]."',plan='".$_POST['plan']."' WHERE  diary_ID=$_POST[diary_ID] and diary_ID=$_POST[diary_ID] ";
	
	mysqli_query($conn,$sql);
//executed query

if(mysqli_query($conn,$sql)){
		
		header("Location: page_end.php?update=success");
			exit();
}
	else
	echo"Not updated";}
else
{ $delete=$_POST['diary_ID'];
  $delete=mysqli_query($conn,"DELETE FROM tbl_diary WHERE diary_ID='$delete'");
  if($delete)
  {		echo$delete;
	  header("Location:dupdate_table.php");
  }
  else
  {
	  echo "mysql_error()";
  }
 
 // ob_end_flush();
}