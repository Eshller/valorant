<?php require 'controllers/authController.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="valorant.css">
    <title>Valorant</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/Eshller.svg" alt="" width="120" height="60" class="d-inline-block align-text-top">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#naEshller" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="conf.html" target="_blank">ConfessionPage</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explore
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" name="logout" href="login.php">LogOut</a></li>
                </ul>
              </li>
            </ul>
            
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="search-btn">Search</button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="navbar-brand" href="profile.php" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
            <i class="bi bi-person-circle"></i></a>&nbsp;&nbsp;
          </div>
        </div>
      </nav>
    <div class="containers text-center">
    <!-- <img src="images/vd1.gif" alt=""> -->
    </div>
<?php $sqlcount= "SELECT COUNT(*) AS count FROM `valorant`";
$query_result= mysqli_query($conn,$sqlcount);
while($row=mysqli_fetch_assoc($query_result)){
    $count=$row['count'];
}
?>
<div class="center"> 
   <form class="row gy-2 gx-3 align-items-center" method="POST" action="valorant.php">
    <div class="col-sm-2">
      <label class="visually-hidden" for="autoSizingInput">Name</label>
      <input type="text" class="form-control" placeholder="Enter Your Name" name="namee" id="namee">
    </div>
    <div class="col-auto">
      <label class="visually-hidden" for="autoSizingInputGroup">RiotID</label>
      <div class="input-group">
        <div class="input-group-text">@</div>
        <input type="text" name="riotid" id="riotid" class="form-control" id="autoSizingInputGroup" placeholder="RiotID ">
      </div>
    </div>
    <div class="col-auto">
      <label class="visually-hidden" for="autoSizingInput">Tagline</label>
      <input type="text" name="tagline" id="tagline" class="form-control" id="autoSizingInput" placeholder="Tagline without #">
    </div>
    <div class="col-sm-2">
      <label class="visually-hidden" for="autoSizingSelect">RANK</label>
      <select class="form-select" name="rank" id="rank">
        <option value="">--Your Rank--</option>
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
    <div class="col-sm-2">
      <label class="visually-hidden" for="autoSizingInput">Discord ID </label>
      <input type="text" name="discord" id="discord" class="form-control" id="autoSizingInput" placeholder="Discord ID">
    </div>
    <div class="col-auto">
      <button type="submit" name="submita" class="btn btn-primary">Submit</button>
      
    </div>
  </form>

</div>
</div>
<div class="count">Total Users: <?php echo '<strong>'.$count.'</strong>'?></div>
<?php
ob_start(); 

//when button is pressed
$name="";
$Riotid="";
$Tagline="";
$Discord="";
$Rank="";
//when button is pressed
if(isset($_POST['submita'])){    
    $name=$_POST['namee'];
    $Riotid=$_POST['riotid'];
    $_SESSION['riotid']=$_POST['riotid'];
    $Tagline=$_POST['tagline'];
    $_SESSION['tagline']=$_POST['tagline'];
    $Discord=$_POST['discord'];
    $Rank=$_POST['rank'];
//validation check
    if(empty($Rank)){
    $errors['rank']="Rank required";
    header("Location:valorant.php");
    exit();
    }

    if(empty($Discord)){
    $errors['discord']="Discord required";
    header("Location:valorant.php");
    exit();
    }
    if(empty($Tagline)){
        $errors['tagline']="Tagline required";
        header("Location:valorant.php");
        exit();
    }
    if(empty($name)){
        $errors['namee']="name required";
        header("Location:valorant.php");
        exit();
    }
    if(empty($Riotid)){
        $errors['Riotid']="Riot ID Required";
        header("Location:valorant.php");
        exit();
    }
    $conne = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("CONNECTION FAILED"); 
    $sql_query= "INSERT INTO  valorant (name,RiotID,Tagline,Discord,Rank,Changes) VALUES ('$name','$Riotid','$Tagline','$Discord','$Rank','0')";
    $result_a= mysqli_query($conne,$sql_query) or die("FAILED TO ADD DATA");
    ?>
    <script>window.location.href='valorant.php';</script>
    <?php
    
    // mysqli_query($conn,"INSERT INTO  valorant (name,RiotID,Tagline,Discord,Rank) VALUES ('$name','$Riotid','$Tagline','$Discord','$Rank')");
      // header("Location:valorant.php");

    // $contentQuery = "SELECT * FROM conf WHERE content=? LIMIT 1";
    // $stmt= $conn->prepare($contentQuery);
    // $stmt->bind_param('s', $content);
    // $stmt->execute();
    // $result= $stmt->get_result();
    // $userCount= $result->num_rows;
    //      $stmt->close();
    // if($userCount>0){
    //     $errors['content']="Same Conf Exist";
    // }
    }
$sqli= "SELECT * FROM `valorant`";
$result= mysqli_query($conn,$sqli);                   
while($row=mysqli_fetch_assoc($result)){
  echo '<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-'.$row['Discord'].'">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-'.$row['id'].'" aria-expanded="false" aria-controls="flush-'.$row['id'].'">
      <strong><i>'.$row['name'].'</i></strong>
      </button>
    </h2>
    <div id="flush-'.$row['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-'.$row['Discord'].'" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><strong><div class="content">
    <ul>
      <li class="list">Riot ID: '. $row['RiotID'] . '</li>
      <li class="list">Tagline: '. $row['Tagline'] . '</li>
      <li class="list">Rank: '. $row['Rank'] . '<img src="valo_rank/'.$row['Rank'].'.png" alt="" height="22px"></li>
      <li class="list">Discord ID: '. $row['Discord'] . '</li>
    </ul>
  </div></strong></div>
    </div>
  </div>
</div>';

}
ob_end_flush();
?>
</body>
</html>