<?php 
// echo $_POST['ci'];
// echo $_POST['clave'];
session_start();

include('conexion.inc.php');
$sql = "select * from usuario u, identificador i WHERE u.ci={$_POST['ci']} and i.ci= u.ci and u.clave={$_POST['clave']}";
$resultado = mysqli_query($conn, $sql);
if ($fila = mysqli_fetch_row($resultado)){
    $_SESSION['user'] = $_POST['ci'];
    $_SESSION['clave'] = $_POST['clave'];    
    echo 'exito';
}else{
    echo '';
    header("location: login.php?id='NO'");

}
?>