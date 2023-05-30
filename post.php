<?php 
session_start();    
include 'header.php';
include 'connect.php';
?>

<?php
$sql = "SELECT * FROM blog_post";
$result = mysqli_query($conn,$sql);
if(isset($result)){
    $arrayresult = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
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
        include 'post-style.css';
        ?>
    </style>
</head>
<body>
       <?php foreach($arrayresult as $user){ ?>
        <div class="card">
            <center><h1 class="heading"><?php echo $user['heading']; ?></h1></center>
            <br>
            <p><?php echo $user['post']; ?></p>
            <br>
            <h3>post by <?php echo $user['name'];?></h3>
            <br>
            <a href="delete.php?submit=<?php echo $user['user_id'];?>">Delete</a>
        </div>
        <?php }?>
</body>
</html>