<?php

//start session
session_start();
if(!isset($_SESSION["user"])) header("location: login.php");
$user = $_SESSION['user'];
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-IMS</title>
    <link rel="stylesheet"  href="style.css">
    <script src="https://kit.fontawesome.com/e67b731cc8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="DashboardMainContainer">
    <?php include('partials/app-sidebar.php') ?>
       
       <div class="DashboardContentContainer" id="DashboardContentContainer"> 
       <?php include('partials/app-topnav.php') ?>
          <div class="DashboardContent">
             <div class="DashboardContentMain">

             </div>
          </div>
       </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>