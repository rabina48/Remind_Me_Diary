<html>
<head>
	<title>Diary</title>
	
	<style>
			a{
				text-decoration:black;
				display: inline-block;
				padding: 8px 16px;
			
			}
			a:hover{
				background-color:rgb(214, 103, 103);
				color: black;
			
			}
			.back{
				background-color:beige;
				border-radius: 5px;
				
				background-color:beige;
				border-radius: 5px;
				}

			
				
			.next{
					background-color:rgb(139, 139, 81);
				border-radius: 5px;
				
				background-color:beige;
				border-radius: 5px;
				}
				
				}
			
			
			
				</style>
	
	<link rel="stylesheet" type="text/css" href="style.css"
</head>

<body>




<!DOCTYPE html>
<html>
<head>
<title>photos</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="content">
  <form method="POST" action="index.php" enctype="multipart/form-data">
  
		<input type="file" name="image" value="UPLOAD">
  	<div>
      <textarea 
      	id="text" 
      	cols="50" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	
  </form>
</div>
</body>
</html>


		<a href="page.html" class="back">&laquo;BACK</a>
			<a href="event.html" class="next">NEXT&raquo;</a>
			

	<div class ="Event-title">
		<h1>Diary</h1>
	</div>
	
	<div class="contact-form">
		<form id="contact-form method="POST" actions="dbh.inc.php">
		
		Date:<input name="edate" type="Date" class="form-control" placeholder="Date" required> <br>
		Time:<input name="ename" type="Time" class="form-control" placeholder="" required> <br>
		Place:<input name="elocation" type="number" class="form-control" placeholder="Place" required> <br>
		Description:<textarea name="message" class="form-control" placeholder="Message" row="8"> </textarea><br>
		
		Plan for tommorow:<textarea name="message" class="form-control" placeholder="Message" row="8"> </textarea><br>
		
		
	
		
		<input type="submit" class="form-control submit" value="Done">
		
	</form>
	<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);



    $db = mysqli_connect("localhost", "root", "", "remind_me");
  //	include_once('dbh.inc.php');
  	$image = $_FILES['image']['name'];
  	
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	
  	

  	$sql = "INSERT INTO tbl_photos (image, name) VALUES ('".$image."', '".$image_text."')";
  	
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
  	}else{
  		$msg = "Failed to upload image";
	  }
	  header("location:view_Images.php?IMAGENAME=".$image);
	  exit();
  }
  ?>
	
		

		</button>

	</form>
	</div>
</body>
</html>