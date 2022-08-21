<?php

    include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");

    if ($con) { // kolo el hna msh s7 rag3 el awl
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['data'])) {
				echo '<font color="red"><h3> PLEASE ENTER ANY QUERY   </h3></font>';
			}
			else {
				$sql = $_POST['data'];
				
				if(isset($sql)){
					mysqli_query($con,$sql);
					echo '<h2 style="color:green"> YOUR QUERY ARE SUCCESSFULY SAVED</h2>';
				}
				else {
					echo '<h2 style="color:red"> SOMTHING WENT WRONG, PLEASE TRY AGAIN</h2>';
				}
			}
        }
    }
    else{
        echo 'ERROR '.$con;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Exam</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
	body{
	           background-image: url("imgs/pp.png");
	            background-size: cover;
	            }
	            
	.button {
	  
	  padding: 15px 25px;
	  font-family:Lucida Console;
	  font-size: 24px;
	  cursor: pointer;
	  text-align: center;
	  color: #fff;
	  background-color:#009999;
	  border: none;
	  border-radius: 15px;
	  box-shadow: 0 9px #999;
	 margin:20px ;
	}
	
	.button:hover {background-color:#666666}
	
	.button:active {
	    background-color:#009999;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
}
     </style>

	 <script>alert('NOTE: Your input must be a sql code');</script>
    
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		
		<h1>Enter YOUR QUERY!!</h1>
                <h3>INSERT or UPDATE or DELETE</h3> <input type="text" name="data" placeholder="Enter code here" width="340" height="15"> <br>
		
		<button class="button">SEND</button>
	
	</form>

	<form action="adminEdit.php">
		<input type="submit" value="Back" class="button" style="position:relative;
		left: 90%;
		margin-top:25%;">
	</form>
    </body>
</html>
