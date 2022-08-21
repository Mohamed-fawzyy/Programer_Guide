<?php

    include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");

    if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (empty($_POST['email']) || empty($_POST['pass'])) {
            header("location: LogIn.php?y=1");
          }
          else{
            
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $email = test_data($email);

            if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("location: LogIn.php?y=1");
            }
            else{

                $flag = false;
                $u_id = mysqli_query($con,"SELECT user_id FROM users WHERE email = '".$email."' AND password = '".$pass."';");
                while($res = mysqli_fetch_array($u_id)) {
                  session_start();
                  $arr[] = $res[0];
                  $_SESSION['userid'] = $arr;
                }

                $users = mysqli_query($con,"Select email, password from users WHERE email = '".$email."' AND password = '".$pass."';");
                while ($res = mysqli_fetch_array($users)) {
                    $flag = true;
                    if ($flag == true) {
                        header("Location: homePage.html"); 
                    }
                    else {
                        header("location: LogIn.php?y=1");
                    }
                }
            }
    
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