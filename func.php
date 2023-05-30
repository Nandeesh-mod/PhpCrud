<?php echo "hello world!"?>
<?php include('connect.php');
function fun($conn){
    $sql = "CREATE TABLE mytable(id int not null,name varchar(40));";
    $result = mysqli_query($conn,$sql);
    if(isset($result))
    {
        echo "success";
    }else
    {
        echo "failed";
    }
}

fun($conn);