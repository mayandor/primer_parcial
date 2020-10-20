<?php 
include('../includes/conexion.inc.php');
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/image/';
    // Recibo los datos de la imagen
    $nombre = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $tamano = $_FILES['foto']['size'];
 
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    move_uploaded_file($_FILES['foto'],$directorio.$nombre);

       // Guardo en la BBDD
$sql= "UPDATE  usuario SET foto='{$_POST['foto']}' WHERE ci={$_POST['ci']}";
mysqli_query($conn, $sql);

?>