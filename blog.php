 <?php 
 session_start();
 include 'connect.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php 
        include 'style.css';
        ?>
    </style>
</head>
<body>
    <nav class="nav-bar">
       <center>
        <ul class="list">
            <li><a href="blog.php" class="blog">blog</a></li>
            <li><a href="post.php" class="blog">post</a></li>
        </ul>
    </center>
    </nav>
 <center>
        <div class="form-body">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="text" name="heading" id="heading" placeholder="Heading" required>
                <textarea name="about" id="about" cols="40" rows="6" placeholder="about blog" required></textarea>
                <h3 style="color: green">
                    <?php 
                    if(isset($_SESSION['result'])){
                        echo $_SESSION['result'];
                        session_unset();
                    }
                    ?>
                </h3>
                <input class="submit" type="submit" name="submit" value="Submit">
            </form>
    </div>
    </center>
  
    <?php 
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $heading = htmlspecialchars($_POST['heading']);
        $description = htmlspecialchars($_POST['about']);

        if(isset($name) && isset($heading) && isset($description)){
            $sql = "INSERT INTO blog_post(name,heading,post ) VALUES('$name','$heading','$description')";
            $result = mysqli_query($conn,$sql);
            if(isset($result)){
                $_SESSION['result'] = "Successfully posted";
                header('location:'.$_SERVER['PHP_SELF']);
            }else{
                $_SESSION['result'] = "Unsuccessfull";
                header('localhost:'.$_SERVER['PHP_SELF']);
            }
        }
        else{
            $_SESSION['result'] = "Unsuccessfull";
            header('location:'.$_SERVER['PHP_SELF']);
        }
    }
    ?>
</body>
</html>