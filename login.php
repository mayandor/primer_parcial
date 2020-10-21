<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"></link>
    <title>Login</title>
</head>
<body>
    <?php
        include('includes/conexion.inc.php');
        session_start();
        if(isset($_GET['mesagge'])){
        ?>
        <div class="login-page">
            <form method="POST" action="functions/verificar.php">
                <div class="imgcontainer">
                    <img class="avatar" src="img/avatar.jpg" alt="alt">
                </div>

                <div class="container">
                    <p style="color:red; text-align:center">Usuario y/o contraseña incorrecto</p>
                    <label for="ci"><b>Cedula de Indentidad</b></label>
                    <input type="text" placeholder="12345" name="ci">

                    <label for="ci"><b>Contraseña</b></label>
                    <input type="password" placeholder="*****" name="clave">

                    <label for="ci"><b>Color </b></label>
                    <input type="color" name="color" value="#06075B">
                    <p>
                    <label for="foto"><b>Foto Sesion</b></label>
                    <input name="foto" type="file">
                    </p>
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
        <?php
        }else{
        ?>
        <div class="login-page">
            <form method="POST" action="functions/verificar.php">
                <div class="imgcontainer">
                    <img class="avatar" src="img/avatar.jpg" alt="alt">
                </div>
                <div class="container">
                    <label for="ci"><b>Cedula de Indentidad</b></label>
                    <input type="text" placeholder="12345" name="ci">

                    <label for="ci"><b>Contraseña</b></label>
                    <input type="password" placeholder="*****" name="clave">

                    <label for="ci"><b>Color </b></label>
                    <input type="color" name="color" value="#06075B">
                    <p>
                    <label for="foto"><b>Foto Sesion</b></label>
                    <input name="foto" type="file">
                    </p>
                    <button type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    <?php
        }
    ?>
    </body>
</html>