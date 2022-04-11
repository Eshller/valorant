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
    <link rel="stylesheet" href="edit.css">
    <title>Edit</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                  <li><a class="dropdown-item" href="#">Another action</a></li>
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


    <div class="container-fluid text-center">
        <h1>What do you want to change?</h1>
        <div class="some">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Change Rank
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Rank    ?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row gy-2 gx-3 align-items-center" method="POST" action="edit.php">
            <div class="col-sm-5">
                <label class="visually-hidden" for="autoSizingSelect">RANK</label>
                <select class="form-select" name="rank" id="rank">
                  <option value="">--New Rank--</option>
                  <option value="Unranked">Unranked</option>
                  <option value="Iron 3">Iron 3</option>
                  <option value="Iron 2">Iron 2</option>
                  <option value="Iron 1">Iron 1</option>
                  <option value="Bronze 3">Bronze 3</option>
                  <option value="Bronze 2">Bronze 2</option>
                  <option value="Bronze 1">Bronze 1</option>
                  <option value="Silver 3">Silver 3</option>
                  <option value="Silver 2">Silver 2</option>
                  <option value="Silver 1">Silver 1</option>
                  <option value="Gold 3">Gold 3</option>
                  <option value="Gold 2">Gold 2</option>
                  <option value="Gold 1">Gold 1</option>
                  <option value="Platinum 3">Platinum 3</option>
                  <option value="Platinum 2">Platinum 2</option>
                  <option value="Platinum 1">Platinum 1</option>
                  <option value="Diamond 3">Diamond 3</option>
                  <option value="Diamond 2">Diamond 2</option>
                  <option value="Diamond 1">Diamond 1</option>
                  <option value="Immortal">Immortal</option>
                  <option value="Radiant">Radiant</option>
                </select>
              </div>
            
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="change" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      <?php 
            if(isset($_POST['change'])){
            echo $rank=$_POST['rank'];
            $name=$_SESSION['username'];
            $conns=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("CONNECTION FAILED");
            $sql="UPDATE `valorant` SET Rank = '$rank' WHERE `name` = '$name'";
            $results= mysqli_query($conns,$sql) or die("FAILED TO CHANGE DATA");
            $sql2="UPDATE valorant SET Changes = Changes + 1 WHERE `name` = '$name'";
            $results2= mysqli_query($conns,$sql2) or die("FAILED TO CHANGE DATA");
            ?>
            <script>window.location.href='edit.php';</script>
            <?php } ?>
            </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>