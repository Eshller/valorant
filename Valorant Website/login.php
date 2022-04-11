<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <!--BOOTSTAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <title>Login</title>
</head>
<style>
    body{
            font-size: 20px;
            padding: 0px 20px 40px 0px;
            background-image: url(bg.jpg);
            color: yellow;
        }
        .col-md-4{
           
           box-shadow: inset 0px 1px 0px 0px yellow, 0px 10px 12px 0px yellow;
       }
       .form-group{
           padding: 20px;
       }
       .container{
           padding:50px
       }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 form-div login">
            <form action="login.php" method="post">
                <h3 class="text-center">Login</h3>
                <?php if(count($errors)>0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Username or email</label>
                    <input type="text" name="username" value = "<?php echo $username;?>" class= "form-control form-control lg">

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"  name="password" class="form-control form-control lg">
                                                        
                <div class="form-group">
                    <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>                                   
                </div>
                <div class="form-group">
                    <button type="submit" name="logout" class="btn btn-primary btn-block btn-lg">LogOut</button>                                   
                </div>
                <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>
            </form>
            </div>
        </div>
    </div>
</body>
</html>