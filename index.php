<?php
include("conection.php");

$con = conection();

/* query de sql */

$sql = "SELECT * FROM users";
$query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="mt-3">
            <form action="insert.php" method="POST">
                <input type="text" class="form-control mb-3" name="name" placeholder="Nombre">
                <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellido">
                <input type="text" class="form-control mb-3" name="username" placeholder="Usuario">
                <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña">
                <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                
                <input type="submit" value="Agregar usuario" class="btn btn-primary">
            </form>

            
        </div>
        <div>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody> 
                    <?php while ($row = mysqli_fetch_array($query)):?>
                        
                    <tr>
                        <th><?= $row['id']?></th>
                        <th><?= $row['name']?></th>
                        <th><?= $row['lastname']?></th>
                        <th><?= $row['username']?></th>
                        <th><?= $row['password']?></th>
                        <th><?= $row['email']?></th>
                        <th><a href="" class="btn btn-secondary">Editar</a></th>
                        <th><a href="" class="btn btn-danger">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>