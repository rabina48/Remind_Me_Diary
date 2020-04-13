<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);



    //$db = mysqli_connect("localhost", "root", "", "db_remindme");
  include_once('dbh.inc.php');
  	$image = $_FILES['image']['name'];
  	
  	$image_text = mysqli_real_escape_string( $_POST['image_text']);

  	
  	

  	$sql = "INSERT INTO tbl_photos (image, name) VALUES ('".$image."', '".$image_text."')";
  	
  	mysqli_query( $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
  	}else{
  		$msg = "Failed to upload image";
	  }
  }
  ?>





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
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
  <?php if(!empty($image)) { ?>
  <img src="<?php echo ('images/' . $image);?>">
<?php } ?>
</div>
</body>
</html>

