<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['radio'])) {
		echo 'please choose your level';
	}
	else {
		$value = $_POST['radio'];
		if ($value == "Beginner") {
			header("location: explainBegHTML.html");
		}
		elseif ($value == "Intermdiate") {
			header("location: explainIntHTML.html");
		}
		elseif ($value == "Advanced") {
			header("location: explainAdvHTML.html");
		}
	}
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>HTML COURSE</title>
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
    
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		
		<h1>Choose your HTML level !!</h1>
            <input type="radio" name="radio" value="Beginner"> Beginner <br><br>
            <input type="radio" name="radio" value="Intermdiate"> Intermdiate <br><br>
            <input type="radio" name="radio" value="Advanced"> Advanced <br> <br>

		<button class="button">SEND</button>
	
	</form>

	<form action="homePage.html" method="POST">
            <input type="submit" value="back to home" class="button" style="position:relative;
		left: 80%;
		margin-top:28%;">
        </form>
    </body>
</html>
