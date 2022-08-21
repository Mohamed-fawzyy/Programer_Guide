<?php
    if( !isset( $_SESSION ) ) {
        session_start();
        $value = $_SESSION['username'][0];
        print_r("<h3>Hello Mr. " .$value. "</h3> <br>");
    }

    include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");

    if ($con) { // kolo el hna msh s7 rag3 el awl
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['View'])) {
                header("location: viewTable.php");
            }
            elseif (isset($_POST['Edit'])) {
                header("location: editExam.php");
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
<meta charset="UTF-8">
<title>Home Page</title>
</head>

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

<body>
	
    <h1>Choose Your Applying Methods:</h1>
    <br> <br> 

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

        <input name = "Edit" type = "submit" class="button" value = "Edit">
        <input name = "View"   type = "submit" class="button" value = "View">
    </form>

	<form action="adminLog.php" method="POST">
		<input type="submit" value="log out" class="button" style="position:relative;
		left: 90%;
		margin-top:30%;">
	</form>
	
</body>
</html>