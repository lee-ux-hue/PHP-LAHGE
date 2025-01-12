<?php

$conn = mysqli_connect("127.0.0.1:3307","root","","user_datab");
session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']); 
   $user_type = $_POST['user_type'];

   $query= "UPDATE 'user_datab' SET 'name'='$name', 'email'='$email', 'password'='$pass', 'cpassword'='$cpass', 'user_type'='$user_type'";
   $query_run = mysqli_query($conn,$query);

   if($query_run){
    echo '<script type="text/javascript">alert("Database has been updated") </script>';
    header('location:login_form.php');
   }else{
    echo '<script type="text/javascript">alert("Database has not been updated") </script>';
   }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
   .form-container{
   background-image: url("img/bg5.png")!important;
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               background-color: #cccccc;
               COLOR:red;
   }

   .form-container form{
      background:linear-gradient(#d9d9d9,#3b3838);
   }
   </style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Account update</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your new name">
      <input type="email" name="email" required placeholder="enter your new email">
      <input type="password" name="password" required placeholder="enter your new password">
      <input type="password" name="cpassword" required placeholder="confirm your new password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="update" class="form-btn">
      <p>don't want to update? <a href="login_form.php">go back</a> </p>
      <script type="text/javascript">alert("Database has not been updated.") </script>;
   </form>

</div>

</body>
</html>