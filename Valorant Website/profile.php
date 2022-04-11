<?php require 'controllers/authController.php'; 
if(!isset($_SESSION['username'])):header("Location:login.php"); endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profile.css">
    <title>Profile</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light.bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="images/Eshller.svg" alt="" width="120" height="60" class="d-inline-block align-text-top">
                
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#naEshller" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="valorant.php" target="_blank">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="conf.html" target="_blank">ConfessionPage</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explore
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="valorant.php">Valorant</a></li>
                  <li><a class="dropdown-item" href="edit.php" target="_blank">Edit Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" name="logout" href="login.php">LogOut</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="search-btn">Search</button>
            </form>
          </div>
        </div>
      </nav>



    <div class="containers">
            <div class="profile_card data-tilt">
            <div class="image text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="6  0" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
            <i class="bi bi-person-circle"></i>
        </div>
        <div class="details">
            <ul>
                <li class="list">Name : <?php echo $_SESSION['username']; ?></li>
                <li class="list">Email ID: <?php echo $_SESSION['email']; ?></li>
                <li class="list">Riot ID: <?php
              $name=$_SESSION['username'];
             
               $sqli= "SELECT * FROM `valorant` WHERE name='$name'";
              $result= mysqli_query($conn,$sqli);                   
    while($row=mysqli_fetch_assoc($result)){
      echo $row['RiotID'];
      $riot=$row['RiotID'];
    }

?></li>
                <li class="list">Tagline: <?php
    $name=$_SESSION['username'];
    $sqli= "SELECT * FROM `valorant` WHERE name='$name'";
    $result= mysqli_query($conn,$sqli);                   
    while($row=mysqli_fetch_assoc($result)){
      echo $row['Tagline'];
      
    }

?></li>
            </ul>
        </div>
        
<div class="share">
<a href="https://api.whatsapp.com//send?text=Hey%20There%20Check%20out%20my%20profile,%0a*RiotID:<?php echo $name; ?>*%0a*Tagline:<?php echo $riot?>*" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg><i class="bi bi-whatsapp m-5 p-5"></i></a></div>
</div>
</div>
<script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".profile_card"), {
        max: 10,
        speed: 400
      });
    </script>
      </body>
</html>