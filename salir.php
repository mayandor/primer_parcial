<?php 
//incluimos la conección
require_once('conexion.inc.php');
?>
    <?php
        // ** cerrar sesion **
        session_start();
        if(session_destroy()){
            header("location: index.php"); 
        }

        // if(isset($_GET['modo']) == 'desconectar')
        // {
           
        //limpiamos todas las variables de sesion iniciadas
        // $_SESSION['user'] = NULL ;
        // $_SESSION['clave'] = NULL ;
        // $_SESSION['imagen_perfil'] = NULL ;

 
        //   unset($_SESSION['user']);
        //   unset($_SESSION['clave']);
        //   unset($_SESSION['imagen_perfil']);
 
          //redireccionamos al index
        
  ?>