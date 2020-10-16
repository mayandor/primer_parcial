<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('conexion.inc.php');
    session_start();
    if(isset($_GET['id'])){
        echo $_GET['id'];    
        ?>
    <form method="POST" action="verificar.php">
        <input type="text" placeholder="ci" name="ci">
        <input type="password" placeholder="clave" name="clave">
        <button type="submit">Ingresar</button>
    </form>
<?php
    }else{

        ?>
<form method="POST" action="verificar.php">
    <input type="text" placeholder="ci" name="ci">
    <input type="password" placeholder="clave" name="clave">
    <button type="submit">Ingresar</button>
</form>
    <?php
}
    ?>

    </body>
</html>