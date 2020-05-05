<!DOCTYPE html>
<html>

       <head>
           
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
<title>
REMIND ME! 
 
</title>
<style>
    
    body{
        margin:0;
        background:url('dairy.jpg');
        background-size:cover;
        text-align: center;
        }
        .menu{
            display: inline-block;
            background:rgba(0,0,0,0.5);
        }
        .menu .btn{
            display: inline-block;
            font-family: sans-serif;
            font-size:44px;
            float:left;
            color:#333;
            padding:140px 25px;
           background-color:rgb(248, 248, 241);

        }
        .btn .fa{
            background-color:#000;
            width: 42px;
            height:42px;
            text-align: center;
            line-height: 42px;
            border-radius: 50%;
            margin-right: 8px;
        }
        .btn:hover{
            cursor: pointer;
            background-color:navajowhite;
            color:darkolivegreen;
        }
    </style>
	
    </head>
    
    <body >
			
			<a href="journal.html" class="back">&laquo;BACK</a>
			<a href="page.html" class="next">NEXT&raquo;</a>
             <h1>REMIND ME!</h1>
			 <h2>Update the entered values</h2>
			 <h4> You have sucessfully recorded you entries to update any of the entries press the respective button</h4>
            <div class="menu">
                    <a href="dupdate_table.php" class="btn btn-info" role="button">UPDATE DIARY</a>
                    <a href="eupdate_table.php" class="btn btn-info" role="button">EVENT</a>
                    <a href="lupdate_table.php" class="btn btn-info" role="button">TO DO LIST</a>
                    <a href="jupdate_table.php" class="btn btn-info" role="button">JOURNAL</a>
                
            </div>
            
        

            <button onclicce tk="goBack()">&larr;</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>