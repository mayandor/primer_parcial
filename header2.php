<?php
// *** validamos para el login del sitio
if (!isset($_SESSION)) {
  session_start();
} 
?>
<div>
<img src="user/<?php echo $_SESSION['MM_Foto_user']; ?>" alt="User Image" />
 
 <ul>
     <li><img src="<?php $_SESSION['imagen_perfil'];?>" alt=""></li>
     <li><?php echo  $_SESSION['user'];?></li>
     <li><a href="salir.php?modo=desconectar">Salir</a></li>
 </ul>
</div>