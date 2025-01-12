<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   .container{
   background-image: url("img/bg9.png")!important;
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               background-color: #cccccc;
               COLOR:red;
   }

   .container .content h3{
   color:white;
}

.line{
   overflow: hidden;
}

.line::after{
   opacity 1;
  transform: translate3d(-100%, 0, 0);
}

.line:hover::after,
.line:focus::after{
   transform: translate3d(0, 0, 0);
}

.line:hover{
   text-decoration:underline;
}
.container .content h1{
   font-size: 50px;
   color:white;
}
   </style>
   
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span class = "line"><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="update.php" class="btn">Update</a>
      <a href="register_form.php" class="btn">New</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>