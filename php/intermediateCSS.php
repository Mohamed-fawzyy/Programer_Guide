<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5'])) {
		echo '<font color="red"><h3> please choose answer for all questions  </h3></font>';
	}
	else {
		$value_q1 = $_POST['q1'];
		if ($value_q1 == "background-attach") {
			echo '<br> q1 is right answer';
		}
        else {
            echo ' <br> q1 is wrong answer';
        }

        $value_q2 = $_POST['q2'];
		if ($value_q2 == "background-color") {
			echo ' <br> q2 is right answer';
		}
        else {
            echo ' <br> q2 is wrong answer';
        }

        $value_q3 = $_POST['q3'];
		if ($value_q3 == "border-right-color") {
			echo '<br> q3 is right answer';
		}
        else {
            echo ' <br> q3 is wrong answer';
        }

        $value_q4 = $_POST['q4'];
		if ($value_q4 == "9") {
			echo ' <br> q4 is right answer';
		}
        else {
            echo ' <br> q4 is wrong answer';
        }

        $value_q5 = $_POST['q5'];
		if ($value_q5 == "font-size") {
			echo ' <br> q5 is right answer';
		}
        else {
            echo ' <br> q5 is wrong answer';
        }

	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<style>
body{

    background-image: url("imgs/32ba092f09021bb6ee891a0fe1b7110f.png");
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

<h3>1-Which of the following property sets the background image to scroll or not to scroll with its associated element's content?</h3>
<input type="radio" name="q1" value="background-scroll">background-scroll<br>
<input type="radio" name="q1" value="background-attach">background-attach<br>
<input type="radio" name="q1" value="background-attachment">background-attachment<br>

<h3>2-Which of the following property sets an element's background color?</h3>
<input type="radio" name="q2" value="background-image">background-image<br>
<input type="radio" name="q2" value="background-color">background-color<br>
<input type="radio" name="q2" value="background-colors">background-colors<br>

<h3>3-Which of the following property defines the color of an element's right border?</h3>
<input type="radio" name="q3" value="border-right-colors">border-right-colors<br>
<input type="radio" name="q3" value="border-right-color">border-right-color<br>
<input type="radio" name="q3" value="border-right">border-right<br>

<h3>4-In how many way border-image-width CSS property can be defined?</h3>
<input type="radio" name="q4" value="4">4<br>
<input type="radio" name="q4" value="9">9<br>
<input type="radio" name="q4" value="5">5<br>

<h3>5-Which of the following property sets the size of the font?</h3>
<input type="radio" name="q5" value="font-size">font-size<br>
<input type="radio" name="q5" value="font-variant">font-variant<br>
<input type="radio" name="q5" value="font-style">font-style<br>

<input type="submit" value="submit" class="button">
</form>

<form action="homePage.html" method="POST">
<input type="submit" value="back to home" class="button">
</form>

</body>
</html>