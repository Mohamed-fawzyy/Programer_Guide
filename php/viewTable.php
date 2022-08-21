<?php
include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");
if ($con) { 
            $veiw = mysqli_query($con, "SELECT * FROM htmlexam ORDER BY tt");
            
            echo "<table border = '3' style='background-color:white;' ";
            echo "<tr> <th>Questions</th> <th>Answers</th> <th>Exam Level</th></tr>";
            while($res = mysqli_fetch_array($veiw)) 
            {
                echo "<tr>";
                echo "<td>".$res['questions']."</td>"."<td>".$res['answers']."</td>"."<td>".$res['e_level']."</td>";
                echo "</tr>";
            }
            echo "</table>";
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Table View</title>
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

	<form action="adminEdit.php">
		<input type="submit" value="Back" class="button" style="position:relative;
		left: 90%;
		margin-top:25%;">
	</form>
	
</body>
</html>