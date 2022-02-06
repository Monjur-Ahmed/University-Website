<?php 

require 'db.php';
session_start();

if (!$_SESSION['loggedin']) {
    header("Location: login.php");
}


?>

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

<h2 style="text-align:center">Welcome to City University <h2>
<div style="margin-left:40%">
 <button class="btn btn-success"><a style="color:white" href="logout.php">Logout</a> </button>          
 </div>            
        
</div>


<?php  include ('footer.php'); ?>


    <script src="js/jQuery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
 




</body>
</html>