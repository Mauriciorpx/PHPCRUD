<?php 
    include("conection.php");

    $con = conection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="mt-3">
            <form action="update.php" method="POST">
                <input type="text" class="form-control mb-3" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellido" value="<?= $row['lastname']?>">
                <input type="text" class="form-control mb-3" name="username" placeholder="Usuario" value="<?= $row['username']?>">
                <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?= $row['password']?>">
                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?= $row['email']?>">
                
                <input type="submit" value="Actualizar usuario" class="btn btn-primary">
            </form>

            
        </div>
</div>
</body>
</html>