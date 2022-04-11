<?php require 'controllers/authController.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession Page</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    lil,.ani{
        font-family: 'New Tegomin', serif;
        font-weight: 500;
        font-size: 16px;
        color: yellow;
        text-decoration: none;
        font-weight: bolder;
        transition: ease-in-out 0.7s;
        font-size: 20px;
        
        
    }
    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 10%;;
    }
    body{
        background: ivory;
        background-image: url(bg.jpg);
    }
    .navbar{
        background: lawngreen;
        border-radius: 40px;;
        
    }
    .nav_links{
        list-style: none;
    }
    .nav_links li a{
        transition: all 0.3s ease 0s;
    }
    .img{
           align-self: auto;
           size: 10%;
            width: 10px;
            height: 10px;
       }
       .nav_links li{
           display: inline-block;
           margin: 10px;
           padding: 0% 20px;

       }
       lil:hover{
           padding-block: 20px;
           color: yellow;
           transition: ease-out 0.5s;
       }
       .ani:hover{
           
           color: yellow;
           transition: ease-in-out 0.5s;
           font-size: 25px;
           
          
       }
       
        nav{
            display: flex;
            justify-content: start;
            align-items: center;
            background-image: url(bg.jpg);
            transition: ease-in-out 0.7s;
        }
            nav:hover{
                background-image: url(bg2.jfif);
                transition: ease-in-out 0.7s;
            
        }
        .center{
            display: flex;
           justify-content: center;
            align-items: center;
            height: 50%;
        }
           #div1{
            height: 100%;
            
        }
        .logo{
            border: white solid 1px;
            
        }
        .main{
            color: white;
            height: 520x;
            border: solid white 2px;
            margin-top: 20px;
        }
        .content{
            border: solid yellow 0.2px;
            padding: 20px;
        }
        .enter{
            
           text-align: center;
           margin: 50px;
           width: 500px;
           height: 50px;
        }
        input[type=text]{
            width: 1500px;
            height: 50px;
            border-radius: 20px;
            border: solid 2px yellow;
            word-wrap: break-word;
        }
        .ok{
            color:yellow;
        }
        
    </style>
<body background="bg.jpg">
    
    
        <nav>
            <ul class="nav_links">
                <li class="lil"><a class="ani" href="flex.html" target="blank">Home</a></li>
                 
                <li class="lil"><a class="ani" href="valorant.php"> Valorant Page</a></li>
                <li class="lil"><a class="ani" href="conf.php"> ConfessionPage </a></li>   
            </ul></nav>
<div  id="div1"  class="center">
    <img class="logo" src="conf.jpg" alt="" width="500px" height="200px">
</div>
<div class="center">
    <form action="" method="post">
    <select name="n1o2" id="n1o2">
        <option value="">--Your Name--</option>
        <option value=<?php echo "Anonymous"; ?>>Anonymous</option>
        <option value=<?php echo $_SESSION['username']; ?>><?php echo $_SESSION['username']; ?></option>
    </select>
    
   <textarea class="enter" name="ff" id="" cols="30" rows="10"  placeholder="Write here"></textarea><br>
   <button type="submit" name="submits" >Enter</button>
   </form>
   
</div>
<div class="ok">
<?php   

//when button is pressed
$identity="";
$content="";

//when button is pressed
if(isset($_POST['submits'])){       
    $identity=$_POST['n1o2'];
    $content=$_POST['ff'];
//validation check
    if(empty($identity)){
        $errors['identity']="Username required";
        header("Location:conf.php");
        exit();
    }
    if(empty($content)){
        $errors['content']="Write down your conf";
        header("Location:conf.php");
        exit();
    }
    if(mysqli_query($conn,"INSERT INTO  conf (identity,content) VALUES ('$identity','$content')")){
        header("Location:conf.php");
        exit();
        
    }
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
$sqli= "SELECT * FROM `conf`";
$result= mysqli_query($conn,$sqli);                   
    while($row=mysqli_fetch_assoc($result)){
        echo '<ul>
        <li class="content">'.$row['identity'].'
    
             <div class="ins">
                <ul> <li>&nbsp;&nbsp; '. $row['content'] . ' </li></ul>
             </div>
         </li>';

    }
        ?>
    </ul>
</div>
</body>
</html>
