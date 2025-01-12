<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
 <body>

  


    
 <div class="container1">

  <div class="form1">
  <h2>Login Form</h2>
        <!--Users input-->
        <form1  action="login.php" method="post">
            <div class="form-group">
                <p>Email</p>
                <input type="email" class="form-control" name="email_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eli@gmail.com">
        <!--Password input-->
                 <p>Password</p>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="1234">
        
                <form action="welcome.php" method="post">
                <input class="btn btn-primary" type="submit"  name="logout" value="Logout!">
                </form>
    </div>



    
    


  </body>
</html>

<?php
if(isset($_POST["logout"])){
    header("Location: logout.php");
}
?>