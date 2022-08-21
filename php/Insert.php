<?php

  include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");
  $sql = "INSERT INTO users(user_name, phone_number, email, password) VALUES ('$_POST[username]','$_POST[phone]','$_POST[email]','$_POST[pass]')";

  if ($con) {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['pass'])) {
      header("location: SignUP.php?x=1");
    }
    else{
        $username = $_POST['username'];
        $username = test_data($username);
        
        $email = $_POST['email'];
        $email = test_data($email);


        if (! preg_match("/^[A-Za-z ]*$/",$username)) {
          $err = 'fg';
            header("location: SignUP.php?x=1".$err);
        }
        elseif(! filter_var($email,FILTER_VALIDATE_EMAIL)){
          header("location: SignUP.php?x=1");
        }
        else{
            mysqli_query($con,$sql);
            $u_id = mysqli_query($con,"SELECT user_id FROM users WHERE email = '".$_POST['email']."'");
            while($res = mysqli_fetch_array($u_id)) {
              session_start();
              $arr[] = $res[0];
              $_SESSION['userid'] = $arr;
            }
            header("Location: homePage.html");

          }// 34an lw htrg3 kol haga mknha 7ot de f else w bs header("Location: homePage.html");
      } 
  }
  else{
      echo ' Send the data from method post ';
    }
  }
  else{
    echo 'ERROR '.$con;
  }

  function test_data($data){
    $data = trim($data); // to handle the space bet words
    $data = stripslashes($data); // to remove the backslaches
    $data = htmlspecialchars($data); // to prevent entering html code 

    return $data;
  }

?>