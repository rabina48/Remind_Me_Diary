<?php
	
	
	include_once 'dbh.inc.php';
	
	
	$date=$_POST['date'];
	$expenditure= $_POST['expenditure'];
	$income=$_POST['income'];
	$profit=$_POST['profit'];
//old_balance=0;
	
	//d="SELECT max(journal_ID) FROM tbl_journal ";
//balance = "select balance from tbl_journal where journal_ID = '$id'";
//balance = $balance + $income - $expenditure ;
	$sql= "INSERT INTO tbl_journal (date,expenditure,income,profit )  VALUES ('$date', '$expenditure', '$income', '$profit')";
	echo $sql;
		if ($conn->query($sql)){
			header("Location: journal.html?ntered");
			exit();
		}
		
		else
		{echo "Error".$sql."<br>".$conn->error;}
	
	$conn->close();


?>