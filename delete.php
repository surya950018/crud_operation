<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db( $connection ,"dbcurd");
$delete=$_GET['del'];

$sql =" delete from teacher where id= '$delete'";

    if(mysqli_query( $connection ,$sql))

        {

            echo '<script>location.replace("index.php")</script>';

        }
        else
        {
        echo "somthing error".  $connection ->error;
        }

?>

