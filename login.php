<?php 

require 'db.php';
session_start();

if ($_SESSION['loggedin']) {
    header("Location: profile.php");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>City University of Bangladesh</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/ICON.png">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/dataTables.bootstrap.css">
    <link rel="stylesheet" href="bootstrap/AdminLTE.min.css">
    <link rel="stylesheet" href="bootstrap/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
        
.login{ 
    background: #fff;
    min-height: 400px;
    margin: 50px 200px 50px 200px;
    }

    </style>
</head>
<body>

<?php  include ('header.php');      ?>

    
<div class="login">


            <h3 style="text-align: center; padding-top:20px">Login</h3>
            <hr />
            <form style="width: 50%; margin: 5% 20% 20% 25% ; display: block;" method="POST">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Login</button>
              <hr />
              <button type="button" class="btn btn-link"> <a href="register.php">Register</a> </button>
              <button type="button" class="btn btn-link">Reset Password</button>
      
            </form>
      
             
        
</div>


<?php  include ('footer.php'); ?>


    <script src="js/jQuery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
 




</body>
</html>



<?php


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($connect, $sql);
	if ($result->num_rows > 0) {
		$_SESSION['loggedin'] = true;
	  echo " <script> location.replace('profile.php'); </script> ";
	} else {
		echo "<script>  swal('Password not matched!', 'Try again', 'error')</script>";
	}
}




?>