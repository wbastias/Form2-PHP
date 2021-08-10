<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Registro usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST"> <!-- si no esta el metodo post no sirve -->
        <h1>Suscribete!</h1>
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="registro" >
    </form>
    <?php 
        include("registrar.php");
    ?>
</body>
</html>