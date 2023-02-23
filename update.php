<?php 
    include("conection.php");

    $con = conection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>