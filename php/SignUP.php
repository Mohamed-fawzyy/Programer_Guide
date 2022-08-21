<?php
  $x=0;
  if(isset($_GET['x'])){
    if($x!=""){
      echo '<font color="black"><h3> Enter All Data Field or Right Data </h3></font>';
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
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
              background-color:white;
             
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
.red{color: red;}
.button:active {
  background-color:#ffcccc;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

    </style>
    
    <body>
        <form action="Insert.php" method="POST">
    <center>
        <h1>Sign Up</h1>
         <table>
                <tr>
                    <td>User Name <input type="text" name="username" placeholder="username"></td>
                    
                </tr>
                <tr>
                    <td>Phone number <input type="text" name="phone" placeholder="EGY(+20)"></td>

                </tr>
                <tr>
                    <td>Email <input type="email" name="email" placeholder="email"></td>
                    
                </tr>
                <tr>
                    <td>Password <input type="password" name="pass" placeholder="password"></td>
                   
                </tr>
                <tr>
               <td><input class="button" type="submit" value="Sign Up"></td> 
                </tr>
                
        </table>
    </center>
        </form>
    </body>
</html>