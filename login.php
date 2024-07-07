<?php
// start the session
session_start();
if(isset ($_SESSION["user"])) HEADER("location: Dashboard.php");

$error_message = '';

if($_POST){
     include('database/connection.php') ;

     $username = $_POST['username'];
     $password = $_POST['password'];

     $query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'"';
     $stmt = $conn->prepare($query) ;
     $stmt->execute() ;


    

     if($stmt->rowCount() > 0){
           $stmt->setFetchMode(PDO::FETCH_ASSOC) ;
           $user =$stmt->fetchAll()[0] ;
           $_SESSION['user'] = $user ;
          
        header('Location: Dashboard.php') ;
     }else $error_message = 'Please enter correct Username and Password' ;
    

}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login-Inventory Management System</title>
     <link rel="stylesheet" href="style.css">
   </head>
<body id="LoginBody">
     <?php if(!empty($error_message)) { ?>
          <div id="errorMessage">
             <strong>Error:</strong></p> <?= $error_message ?> </p>
          </div>

     <?php } ?>
 
    <div class="container">
         <div class="header">
              <h1>INVENTORY MANAGEMENT SYSTEM</h1>
         </div>
         <div class="login">
            <form action="login.php" method="POST">
                <div class="Info">
                    <h3><b>Login Info</b></h3>
                </div>
                <div class="loginArea">
                     <label for="">Username:</label>
                     <input type="text" placeholder="Enter Your Username" name="username" class="box1"/> 
                </div>
                <div class="loginArea">
                     <label for="">Password:</label>
                     <input type="password" placeholder="Enter Password" name="password" id="box" /> 
                </div>
                <div class="loginButton">
                     <button>Login</button>
                </div> 
            </form>     
          </div>
     </div> 
    
</body>
</html>       
         
        
           
              