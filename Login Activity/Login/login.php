<?php
session_start();
?>

<!Doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <div class="container">

  <div class="form">
  <h1>Login Form</h1>
        <!--Users input-->
        <form  action="login.php" method="post">
            <div class="form-group">
                <p>Email</p>
                <input type="email" class="form-control" name="email_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <!--Password input-->
                 <p>Password</p>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        <!--Submit input-->       
        <div id="input">
        <input type="submit" class="btn btn-primary" name="btnclick" ></input>
        </div>
    </div>

  
   
  </body>
</html>


<?php

if(isset($_POST["btnclick"])){

    $email_id = $_POST["email_id"];
    $password = $_POST["password"];

    $_SESSION["status"]=false;

   

    if ( $email_id == "eli@gmail.com" && $password == "1234" ){

        $_SESSION["email_id"] = $email_id;
        $_SESSION["status"]= true;
        header("Location: welcome.php");
    }
    else{
        echo "invalid credentials";
    }
    
}

?>