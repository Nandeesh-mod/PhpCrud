<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world!</h1>
    <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
        <input type="submit" value="submit" name="submit">
    </form>


    <!-- php goes here -->
    <?php
    if(isset($_POST['submit']))
    {
        header('location:'.'blog.php');
    }
    ?>
</body>
</html>