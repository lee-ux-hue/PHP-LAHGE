<?php
include "db_conn.php";
$id =  $_GET['id'];

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `final` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Information Update successfully");
    }
    else {
        echo "Failed: " . mysql_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <title>FINALS</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content fs-3 mb-5" style="background-color: #2a9d8f;">
            APPLICATION
    </nav>
        
    <div class="container">
        <div class="text-center mb-4">
            <h3> EDIT USER INFORMATION </h3>
            <p class="text-muted">Please Click the update button after changing any information. Thank you!</p>
        </div>

        <?php
         
          $sql = "SELECT * FROM `final` WHERE id = $id LIMIT 1";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class=form-label">FIRST NAME:</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
                </div>
                
                <div class="col">
                    <label class=form-label">LAST NAME:</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
                </div>    
            </div>

            <div class="mb-3">
            <label class=form-label">EMAIL:</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
            </div>
            
            <div class="form-group mb-3">
                <label>GENDER: </label> &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender']=='male')?
                "checked":""; ?>>
                <label for="male" class="form-input-label">M</label>
                &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')?
                "checked":""; ?>>
                <label for="female" class="form-input-label">F</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">Update</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>