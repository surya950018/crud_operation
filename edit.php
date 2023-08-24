<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db( $connection ,"dbcurd");
$edit=$_GET['edit'];

$sql =" select * from teacher where id= '$edit'";

$run = mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($run))

{

    $uid=$row['id'];
    $name=$row['name'];
    $address=$row['address'];
    $mobile=$row['mobile'];

}

?>




<?php
    $connection = mysqli_connect("localhost","root","");
    $db=mysqli_select_db( $connection ,"dbcurd");

    if(isset($_POST['submit']))
    {
        $edit=$_GET['edit'];

       $name=$_POST['name'];

       $address = $_POST['address'];

       $mobile = $_POST['mobile'];

       $sql = "update teacher set name='$name',addres='$address',mobile='$mobile', where id='$edit'";
        
       if(mysqli_query( $connection ,$sql))

       {

        echo '<script>location.replace("index.php")</script>';

       }
       else
       {
       echo "somthing error".  $connection ->error;
       }



    }






?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student crud application</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
       <div class="row">
            <div class="col-md-9">
                <div class="card">
                <div class="card-header">
                   <h1>Student crud application</h1>
                </div>
                <div class="card-body">
                <form action="add.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"value=" <?php echo $name ;?>" >
                  
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address"  class="form-control" placeholder="Enter Address"value="<?php echo  $address?>">
                  
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile"value="<?php echo  $mobile?>">
                  
                </div>
                <br/>
                <input type="submit" class="btn btn-primary"name="submit" value="edit">
                </form>
                 
                </div>


                </div>


             </div>

        </div>

    </div>
    
</body>
</html>