<?php 
include 'connect.php';
?>
<?php 
    if(isset($_GET['submit'])){
        $id = $_GET['submit'];
        $sql = "DELETE FROM blog_post WHERE user_id = '$id'";
        $result = mysqli_query($conn,$sql);
        if(isset($result)){
            $_SESSION['delete_message'] = "Success";
            header('location:'.'http://localhost/blog/admin/post.php');
        }
    }
 ?>