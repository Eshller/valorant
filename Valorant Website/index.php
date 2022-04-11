<?php require_once 'controllers/authController.php';

    if(!isset($_SESSION['id'])){
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!--BOOTSTAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <title>HomePage</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 form-div ">
            <?php if(isset($_SESSION['message'])): ?> 
            <div class="alert <?php echo $_SESSION['alert-class'] ?>">     
            <?php
             echo $_SESSION['message']; 
             unset($_SESSION['message']);
             unset($_SESSION['alert-class']);?>
                
            </div>
            <?php endif; ?>
            <h3>Welcome <?php echo $_SESSION['username']; ?> </h3>
            <a href="index.php?logout=1 " class="logout">Logout</a>

            <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning">
            You need to verify your account
            Check your email!
            <strong><?php echo $_SESSION['email']; ?></strong>
            </div>
            <?php endif; ?>
           <?php if($_SESSION['verified']): ?> 
           <button class="btn btn-block btn-lg btn-primary">I am verified</button>
           <?php endif; ?> 
           </div>
        </div>
    </div>
</body>
</html>