
<!DOCTYPE html>
<html lang="en">

<?php
include_once("connection.php");
include_once("functions.php");
session_start();
$session = isset($_SESSION['email']);

$user_data = check_login($mysqli);


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>

    <link rel="stylesheet" href="../web-eng/css/style.css">
    <link rel="stylesheet" href="../web-eng/css/style2.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="body">
    <section class="head-section">
        <nav class="navbar">
            <div>
                   
                <img class="app-icon" src="../web-eng/img/app_icon_small.png" alt="Icon">
               
            </div>
            
            <h2 style="text-align: center">  <br> Log In as, <?php echo $user_data['email']; ?> </h2>
           

            <div class="nav-item-list">
                <ul class="nav-items">
                    <li class="item"><a href="">Medicine</a></li>
                    
                    <li class="item"><a href="emergency contact.php">Emergency Contact</a></li>
                    </ol>
            </div>
            
               <div>
                <button id="log-out_btn-id" type="submit" class="log-out-button" name="Submit" onclick="location.href = 'logout.php';">LOG Out</button>
            </div>
 
            
   
            
        </nav>
        
                       <script type='text/javascript'>
    document.getElementById("log-out_btn-id").style.display = "inline";
  
    </script>

     <div class="wrapper">
      <div class="select-btn">
        <span>Choose Your Area</span>
        <i class="uil uil-angle-down"></i>
      </div>
      <div class="content">
        <div class="search">
          <i class="uil uil-search"></i>
          <input spellcheck="false" type="text" placeholder="Search">
        </div>
        <ul class="options"></ul>
       
      </div>
    </div>
        <section class="head-section-wrapper">
            <div class="first-half">
                   
            </div>
           
           

            
            <div class="second-half">
                <img class="second-half-img" src="../web-eng/img/image 2.png" alt="Image">
            </div>
            

        </section>
    </section>
 
    <script src="js/jquery-3.6.0.js"></script>
<script src="js/j1.js"></script>
<script src="js/main.js"></script>

</body>

