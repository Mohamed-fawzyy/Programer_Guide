<?php
  $y=0;
  if(isset($_GET['y'])){
    
    if($y!=""){
      echo '<font color="red"><h3> Enter All Data Field or Right Data </h3></font>';
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Log IN</title>
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
 
        <form action="selectLog.php" method="POST">
       <center>
                  
        
           <h1>Programmer Guide</h1>
    
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
                <tr>
                    <td><a href="forPass.html">Forget your password?</a></td>
                </tr>
                <tr>
                    <td>Don't have an account?<a href="SignUP.php">Sign up</a></td>
                </tr>
                
        </table>
    </center>
    </form>

    </body>
</html>
