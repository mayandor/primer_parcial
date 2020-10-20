<?php
    session_start();
    // si la session no existe entondes redirecciona añ index caso contrario deja pasar y se carga la pagina
    if (!isset($_SESSION['ci'])){
        header("location: index.php");
    }
?>
    <div>
        <?php include('includes/header.php')?>
        <?php include('includes/sidebar.php')?>
        <!-- Aqui va el contenido -->
        <div class="main">
            <h2>Bienvenido al SEA</h2>
            <p>Ver aprobados por departamento</p>
            <a href="functions/generar_consulta.php">Generar</a>
        </div>
    </div>
<?php

?>