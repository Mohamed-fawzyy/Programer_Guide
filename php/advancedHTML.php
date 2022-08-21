<?php

include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");

if ($con){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5'])) {
		echo '<font color="red"><h3> please enter answer for all questions  </h3></font>';
	}
	else {

        if( !isset( $_SESSION ) ) {
            session_start();
            $id = $_SESSION['userid'][0];
        }

		if (mysqli_query($con,"UPDATE users SET user_ans_adv='q1)".$_POST['q1']."
            , q2)".$_POST['q2'].", q3)".$_POST['q3'].", q4)".$_POST['q4'].", q5)".$_POST['q5']."' WHERE user_id ='".$id."';")) 
            {
			    echo '<h2 style="color:green"> YOUR ANSWERS ARE SUCCESSFULY SAVED</h2>';
		}
        else {
            echo '<h2 style="color:red"> SOMTHING WENT WRONG, PLEASE TRY AGAIN</h2>';
        }

	}
    }
}

    $sql = mysqli_query($con,"SELECT questions FROM htmlexam WHERE e_level = 'htmladv' ORDER BY tt;");
        
        echo "<table border = '1' ";
        while($res = mysqli_fetch_array($sql)) 
        {
            echo "<tr>";
            echo "<td>".$res['questions']."</td> ";
            echo "</tr>";
        }
        echo "</table>";

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Quiz HTML Adv</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
     <style>
h2
{
font-size: 40px;
}
body{

    background-image: url("imgs/kata-squidward.jpg");
    background-size: cover;
    height: 100%vh;
}

.button {
  
  padding: 15px 25px;
  font-family:Lucida Console;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  color: #fff;
  background-color:#ffcccc;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin: 50px;
}

.button:hover {background-color:#666666}

.button:active {
    background-color:#ffcccc;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    
        <table  border="1" >
            <tr><td> <input type="text" name="q1" placeholder="answer Q1"> </td></tr> 
            <tr><td> <input type="text" name="q2" placeholder="answer Q2"> </td></tr> 
            <tr><td> <input type="text" name="q3" placeholder="answer Q3"> </td></tr> 
            <tr><td> <input type="text" name="q4" placeholder="answer Q4"> </td></tr> 
            <tr><td> <input type="text" name="q5" placeholder="answer Q5"> </td></tr> 
        </table>
    
    <input type="submit" value="submit" class="button">
    </form>  

    <form action="homePage.html" method="POST">
<input type="submit" value="back to home" class="button">
</form>

</body>
</html>

        
      
