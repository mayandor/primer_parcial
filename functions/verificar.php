<?php
session_start();
include('../includes/conexion.inc.php');
$sql = "select * from usuario u, identificador i WHERE u.ci={$_POST['ci']} and u.ci=i.ci and u.clave={$_POST['clave']}";
$resultado = mysqli_query($conn, $sql);
if ($fila = mysqli_fetch_row($resultado)){
    $_SESSION['ci'] = $_POST['ci'];
    $_SESSION['clave'] = $_POST['clave'];
    $_SESSION['usuario'] = strtoupper($fila[3]);
    $_SESSION['color'] =  $_POST['color'];
    $_SESSION['imagen_perfil'] =  $_POST['foto'];
    header("location: ../dashboard.php");
}else{
    header("location: ../login.php?id='NO'");
}
?>