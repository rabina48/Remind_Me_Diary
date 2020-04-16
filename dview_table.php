
<?php
    include_once 'dbh.inc.php';
?>
<html>    
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
                                						 						 
</head>
<body>
	<form class="form-control" action="view_table.php" method="post">
		<input type="date" name="search  "  placeholder= "  enter the searching  date"  >  
		<button type="submit" class="btn btn-primary btn-block btn-flat">Search</button> 

	
		
	</form>
		
		
  <div class="form-control">
	<h1>Diary</h1>
  				 <style>
    display: grid;
	grid-template-columns:2fr 3fr 3fr 1fr;
		  
		table{
         
		border-collapase:collapse;
		width:75%;
        color:#000;
        font-family:monospace;
        font-size: 25px;
        text-align:left;
		background-color:#fff;
		}                          
        
		th{
            background-color:#DE7328;
            color:white;
          }
            tr:nth-child(even){background-color: #f2f2f2}
			tr:nth-child(odd){background-color: #D8D2CE}
  </style>	
						   
			<table>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
					<th>Place</th>
                    <th>Description</th>
					<th>Plan</th>
                </tr>
				 <?php
                
                error_reporting(0);
                $sql_places="SELECT date,time,place,description,plan from tbl_diary";
                $result_places=$conn->query($sql_places);
                    if ($result_places->num_rows > 0) {
                        while  ($row =$result_places -> fetch_assoc()){
                        
                            echo "<tr><td>".$row['date']."</td><td>".$row['time']."</td> <td>".$row['place']."</td> <td>".$row['description']."</td><td>".$row['plan']."</td><td></tr>" ;
                        }
                    echo "</table>" ;
                    }
                    else{
                        echo"0 result ";
                    }

                    $conn-> close();

                ?>
            </table>