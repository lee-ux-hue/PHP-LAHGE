<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="bootstrap/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
<script src="bootstrap/bootstrap.min.js"></script>
<style>
body{
    font-family: Courgette;
}
.submit{
  background-color: purple;
  color:white;
  text-size:24px;
  padding: 6px;
  border-radius: 5px;
  border:1px solid white;
  font-size: 24px;
}
.submit:hover{
  background-color: white;
  color: purple;
  box-shadow: 0px 0px 20px white;
}
h1{
	font-size: 14px;
}

td,th{
  padding: 4px;
  text-align: center;
}
</style>
</head>
<?php
$servername = "localhost: 3307";
$username="root";
$password="";
$dbname="hack";
$id="";
$name="";
$fname="";
$email="";
$phone="";
$state="";
$qualification="";
$branch="";
$rollno="";
$gender="";
$birth="birth";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
	$conn =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}
//get data from the form
function getData()
{
	$data = array();

	$data[1]=$_POST['name'];
	$data[2]=$_POST['fname'];
	$data[3]=$_POST['email'];
	$data[4]=$_POST['phone'];
  $data[5]=$_POST['state'];
  $data[6]=$_POST['qualification'];
  $data[7]=$_POST['branch'];
  $data[8]=$_POST['rollno'];
  $data[9]=$_POST['gender'];
	$data[10]=$_POST['birth'];
	return $data;
}
//search
if(isset($_POST['search']))
{
	$info = getData();
	$search_query="SELECT * FROM smash WHERE id = '$info[0]'";
	$search_result=mysqli_query($conn, $search_query);
		if($search_result)
		{
			if(mysqli_num_rows($search_result))
			{
				while($rows = mysqli_fetch_array($search_result))
				{
					$id = $rows['id'];
					$name = $rows['name'];
					$fname = $rows['fname'];
					$email = $rows['email'];
					$phone = $rows['phone'];
          $state = $rows['state'];
          $qualification = $rows['qualification'];
          $branch = $rows['branch'];
          $rollno = $rows['rollno'];
          $gender = $rows['gender'];
					$birth = $rows['birth'];

				}
			}else{
				echo("no data are available");
			}
		} else{
			echo("result error");
		}

}
//insert
if(isset($_POST['insert'])){
	$info = getData();
	$insert_query="INSERT INTO `smash`(`name`, `fname`, `email`, `phone`,`state`,`qualification`,`branch`,`rollno`,`gender`,`birth`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
	try{
		$insert_result=mysqli_query($conn, $insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($conn)>0){
				echo("data inserted successfully");

			}else{
				echo("data are not inserted");
			}
		}
	}catch(Exception $ex){
		echo("error inserted".$ex->getMessage());
	}
}
//delete
if(isset($_POST['delete'])){
	$info = getData();
	$delete_query = "DELETE FROM `smash` WHERE id = '$info[0]'";
	try{
		$delete_result = mysqli_query($conn, $delete_query);
		if($delete_result){
			if(mysqli_affected_rows($conn)>0)
			{
				echo("data deleted");
			}else{
				echo("data not deleted");
			}
		}
	}catch(Exception $ex){
		echo("error in delete".$ex->getMessage());
	}
}
//edit
if(isset($_POST['update'])){
	$info = getData();
	$update_query="UPDATE `smash` SET `name`='$info[1]',fname='$info[2]',email='$info[3]',phone='$info[4]',state='$info[5]',qualification='$info[6]',branch='$info[7]',rollno='$info[8]',rollno='$info[9]',birth='$info[10]' WHERE id = '$info[0]'";
	try{
		$update_result=mysqli_query($conn, $update_query);
		if($update_result){
			if(mysqli_affected_rows($conn)>0){
				echo("data updated");
			}else{
				echo("data not updated");
			}
		}
	}catch(Exception $ex){
		echo("error in update".$ex->getMessage());
	}
}

?>
<body>
	<div class="container-fliud">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" href="Home.html">USER & ADMIN System</a>
    </div>
     <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.html">Home</a></li>
      <li><a href="user.php">User </a></li>
      <li><a href="admin.php"> Admin </a></li>
      <li><a href="updateuserdata.php">Update User Data </a></li>
      <li><a href="updateadmindata.php">Update Admin Data </a></li>
    </ul>
  </div>
</div>
</nav>
      </div>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-4">

<form method ="post"   action="">
	<h1>ID Number (Use to Search User data)</h1>
  <input type="number" name="id"  class="form-control" placeholder="ID No. /Automatic Number Genrates" value="<?php echo($id);?>" disabled>
	<div class="form-group row">
	<div class="col-xs-6">
		<h1>Name</h1>
	<input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo($name);?>" required>
</div>
<div class="col-xs-6">
	<h1>Last Name</h1>
	<input type="text" name="fname" class="form-control" placeholder="Enter Last Name" value="<?php echo($fname);?>" required>
</div>
</div>
<h1>Email</h1>
	<input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo($email);?>" required>
	<h1>Phone (10-digit)</h1>
	<input type="tel" pattern="^\d{10}$" class="form-control" name="phone"  placeholder="10 digit Phone number" value="<?php echo($phone);?>">
	<div class="form-group row">
	<div class="col-xs-6">
		<h1>Select State</h1>
  <select name="state" class="form-control" value="<?php echo($state);?>">
          <option value="ABRA">ABRA</option>
          <option value="BATANES">BATANES</option>
          <option value="CEBU">CEBU</option>
          <option value="DAVAO">DAVAO</option>
          <option value="GUIMARAS">GUIMARAS</option>
          <option value="ILOCOS">ILOCOS</option>
          <option value="KALINGA">KALINGA</option>
          <option value="LEYTE">LEYTE</option>
          <option value="MASBATE">MASBATE</option>
          <option value="NUEVA ECIJA">NUEVA ECIJA</option>
          <option value="To The Moon">To The Moon</option>
          <option value="SQRTT SQRTT">SQRTT SQRTT</option>
          <option value="ORIENTAL MINDOR">ORIENTAL MINDORO</option>
          <option value="PAMPANGA">PAMPANGA</option>
          <option value="PALAWAN">PALAWAN</option>
          <option value="QUEZON">QUEZON</option>
          <option value="UWUUU">UWUUU</option>
          <option value="PANGASINAN">PANGASINAN</option>
          <option value="ROMBLON">ROMBLON</option>
          <option value="HAKDOG">HAKDOG</option>
          <option value="TARLAC">TARLAC</option>
          <option value="SAMAR">SAMAR</option>
          <option value="BALUN-BALUNAN NI CRUSH">BALUN-BALUNAN NI CRUSH</option>
          <option value="ZAMBOANGA">ZAMBOANGA</option>
          <option value="MEHEHEHE">MEHEHEHE</option>
          <option value="MARS">MARS</option>
          <option value="WALA NA AKONG MAISIP">WALA NA AKONG MAISIP</option>
          <option value="HUWIIIIII">HUWIIIIII</option>
          <option value="KAY LORD">KAY LORD</option>

  </select>
</div>
<div class="col-xs-6">
	<h1>Qualification</h1>
<select name="qualification" class="form-control" value="<?php echo($qualification);?>">
    <option value="50%">50%</option>
    <option value="60%">60%</option>
    <option value="10th %age between 50% to 75%">10th %age between 50% to 75%</option>
    <option value="+2 %age between 50% to 85% olus">+2 %age between 50% to 75% plus</option>
  </select>
</div>
</div>
<div class="form-group row">
<div class="col-xs-6">
	<h1>Branch and Semester</h1>
 <select name="branch" class="form-control" value="<?php echo($branch);?>">
    <option value="CS 1st year 1st sem">CS 1st year 1st sem</option>
    <option value="CS 1st year 2st sem">CS 1st year 2nd sem</option>
    <option value="CS 2nd year 1st sem">CS 2nd year 1st sem</option>
    <option value="CS 2nd year 2nd sem">CS 2nd year 2nd sem</option>
    <option value="CS 3rd year 1st sem">CS 3rd year 1st sem</option>
    <option value="CS 3rd year 2nd sem">CS 3rd year 2nd sem</option>
    <option value="CS 4th year 1st sem">CS 4th year 1st sem</option>
    <option value="CS 5th year 2nd sem">CS 4th year 2nd sem</option>
  </select>
</div>
<div class="col-xs-6">
	<h1>Roll No</h1>
  <input type="number" class="form-control" name="rollno" placeholder="Enter the Roll no" max="1000" value="<?php echo($rollno);?>" required>
</div>
</div>
<div class="form-group row">
<div class="col-xs-6">
	<h1>Gender</h1>
  <select name="gender" class="form-control" value="<?php echo($gender);?>">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
</div>
<div class="col-xs-6">
	<h1>Select Birth Year</h1>
 <select name="birth" class="form-control">
      <option value="1999">Year</option>
      <option>2005</option>
      <option>2004</option>
      <option>2003</option>
      <option>2002</option>
      <option>2001</option>
      <option>2000</option>
      <option>1999</option>
      <option>1998</option>
			<option>1997</option>
      <option>1996</option>
			<option>1995</option>
      <option>1994</option>
			<option>1993</option>
      <option>1992</option>
			<option>1991</option>
			<option>1990</option>
    </select>
</div>
</div>

	<div>
		<input type="submit" class="btn btn-success btn-block btn-lg" name="insert" value="Add">
    <a href="updateuserdata.php"<button class="btn btn-info btn-block btn-lg">Update | Delete | Find</button></a>


	</div>
</form>
</div>

    <div class="col-lg-8">
			<h2>USER Data</h2>
<?php
$servername = "localhost: 3307";
$username = "root";
$password = "";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `name`, `fname`, `email`, `phone`, `state`, `qualification`, `branch`, `rollno`, `gender`, `birth` FROM `smash`";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Search ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Email</th>
<th>Phone</th>
<th>State</th>
<th>Qualification</th>
<th>branch</th>
<th>roll no</th>
<th>gender</th>
<th>birth</th>

</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['rollno'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['birth'] . "</td>";

echo "</tr>";


    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
</body>
</html>
