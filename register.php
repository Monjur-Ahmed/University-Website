<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>City University of Bangladesh</title>
     
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/dataTables.bootstrap.css">
    <link rel="stylesheet" href="bootstrap/AdminLTE.min.css">
    <link rel="stylesheet" href="bootstrap/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/ICON.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/validation.js"></script>
    <style type="text/css">
        
.login{ 
    background: #fff;
    min-height: 400px;
    margin: 50px 200px 50px 200px;
    }

    </style>
</head>
<body>

<?php  include 'header.php'      ?>

<div class="login">


            <h3 style="text-align: center; padding-top:20px">Register</h3>
            <hr />

            <form style="width: 50%; margin: 5% 20% 20% 25% ; display: block;" onsubmit="return validation();" method="POST">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname"  placeholder="Your First Name">
                <span id="pfname" class="text-danger font-weight-bold"> </span>
              </div>

              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname"  placeholder="Your Last Name">
                <span id="plname" class="text-danger font-weight-bold"> </span>
              </div>

              <div class="form-group">
                <label for="sid">Student ID</label>
                <input type="text" class="form-control" id="sid" name="sid"  placeholder="Your Student ID">
                <span id="psid" class="text-danger font-weight-bold"> </span>
              </div>

              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <span id="pemail" class="text-danger font-weight-bold"> </span>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <span id="ppassword" class="text-danger font-weight-bold"> </span>
              </div>

              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-enter your Password">
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Register</button>
              <hr />
              <button type="button" class="btn btn-link"> <a href="login.php">Login</a> </button>
              <button type="button" class="btn btn-link">Reset Password</button>
      
            </form>
          
</div>


<?php  include 'footer.php' ?>


    <script src="js/jQuery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>


</body>
</html>



<?php 

require 'db.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    $sid= $_POST['sid'];
	  $email = $_POST['email'];
	  $password = sha1($_POST['password']);
	  $cpassword = sha1($_POST['cpassword']);

	if($password == $cpassword){
		$sql = "SELECT * FROM users WHERE email='$email' AND sid='$sid'";
		$result = mysqli_query($connect, $sql);
		if(!$result->num_rows > 0){
			$sql = "INSERT INTO users (fname, lname,sid,email,password) VALUES ('$fname','$lname','$sid', '$email', '$password')";
			$result = mysqli_query($connect, $sql);
			if($result){

                echo "<script>  swal('Registration Successful!', 'You may login now', 'success').then(function() {
                  window.location = 'login.php';
              });        </script>";

			}else {
                echo "<script>  swal('Registration Unsuccessful!', 'Try Again', 'error');</script>";
			} 
			}else {
            
        echo "<script>  swal('Email Already Exist', 'Please login', 'error').then(function() {
          window.location = 'login.php';
      });        </script>";
               
		}
	}else {
        echo "<script>  swal('Password Not Matched!', 'Try Again!', 'error');</script>";
}
}
?>



