<?php

    include("/Applications/MAMP/htdocs/Programer_Guide/php/dbConnection.php");

    if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (empty($_POST['email']) || empty($_POST['pass'])) {
            echo '<font color="red"><h3> Enter All Data Field </h3></font>';
          }
          else{
            
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $email = test_data($email);

            if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo '<font color="red"><h3> Enter Right Data </h3></font>';
            }
            else{

                $flag = false;
                $admin_name = mysqli_query($con,"Select user_name from admin WHERE email = '".$email."' AND password = '".$pass."';");
                
                while ($res = mysqli_fetch_array($admin_name)) {
                      session_start();
                      $arr[] = $res[0];
                      $_SESSION['username'] = $arr;
                }


                $admin = mysqli_query($con,"Select email, password from admin WHERE email = '".$email."' AND password = '".$pass."';");
                while ($res = mysqli_fetch_array($admin)) {
                    $flag = true;
                    if ($flag == true) {
                      header("Location: adminEdit.php");
                    }
                    else {
                        header("location: LogIn.php?y=1");
                    }
                }
            }
    
        } 
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

<!DOCTYPE html>

<html>
    <head>
        <title>Admin LogIn Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <style>
      
            
     body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
          * {
  box-sizing:border-box;
  
}  
           body{
 
  background-image: url("imgs/oooo.jpg");
  min-height: 380px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
table{
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}
    input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
 input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
 }
       h1{
               
              font-family:Lucida Console;
              font-size: 50px;
              background-color: white;
             
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
  margin: 20px;
}

.button:hover {background-color:#666666}

.button:active {
    background-color:#ffcccc;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

        </style>
    </head>
    <body>
 
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
       <center>
                  
        
           <h1>Programmer Guide Admin</h1>
    
        <table>
                <tr>
                    <td>Email <input type="email" name="email" placeholder="email"></td>   
                </tr>
                <tr>
                    <td>Password <input type="password" name="pass" placeholder="password"></td>
                </tr>
                <tr>
                <td> <input class="button" type="submit" value="Sign in"></td>   
                </tr>
                
                
        </table>
    </center>
    </form>

    </body>
</html>