<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Document</title>
</head>
<body>
    <div class="sidenav" style="background-color:<?php echo $_SESSION['color']; ?>">
        <a href="#"><img src="<?php echo 'img/'.$_SESSION['imagen_perfil']; ?>" alt="" width="60"></a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>