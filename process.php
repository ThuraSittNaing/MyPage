<?php
include "config/dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Thura Sitt Naing Page</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>
<style>
	.form{
			line-height: 30px;
			margin: 150px auto;
			width: 200px;
		}
</style>

<body id="page-top">
  <?php
    if(isset($_POST['login']))
    {
    $username = $_POST['uname'];
    $password = $_POST['password'];
    }
    // echo $username;
    // echo $password;


  if($username == "" && $password == "")
      {
      echo "<script>alert('username or password is incorrect!')</script>";
      echo "<script>location.href='login.php'</script>";
    } 
    else{
    $result = mysqli_query($conn,"SELECT * FROM register WHERE username='$username' AND password='$password'")or die("Could not execute the select query.");
    $row = mysqli_fetch_assoc($result);
    if(is_array($row) && !empty($row)){
      $validuser = $row['username'];
      $_SESSION['valid'] = $validuser;
      $_SESSION['name'] = $row['username'];
      $_SESSION['id'] = $row['id'];
    } else{
      // echo '<script language="javascript">';
      // echo 'alert("username of password is wrong")';
      // echo '</script>';
      // echo "<br/>";
      echo "<center><b>Username or password is wrong ! ! !<b></center>";
      echo "<a href='index.php'><center>Go Back</center></a>";
    }
    if(isset($_SESSION['valid'])){
        header('location:http://localhost/page/home.php');
    }
    }
 

?>
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>

