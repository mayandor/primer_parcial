<html>
<head>
<link rel="stylesheet" href="../css/consulta.css">
</head>
<body>
<?php 
include('../includes/conexion.inc.php');

$sql ="SELECT
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '01') LPZ,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '02') CHQ,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '03') CBBA,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '04') ORU,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '05') PTS,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '05') TJ,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '05') SC,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '05') BE,
(SELECT COUNT(i.residencia) FROM identificador i, notas n WHERE i.ci = n.ci AND n.nota > 50 AND i.residencia= '05') PD";

$resultado = mysqli_query($conn, $sql);
session_start();
?>

    <div>
        <!-- Aqui va el contenido -->
<h1>LISTA DE APROBADOS</h1>
<table>
	<thead>
		<td>LA PAZ</td>
		<td>CHUQUISACA</td>
		<td>COCHABAMBA</td>
		<td>ORURO</td>
        <td>POTOSI</td>
        <td>TARIJA</td>
		<td>SANTA CRUZ</td>
		<td>BENI</td>
        <td>PANDO</td>
	</thead>
<?php
while ($fila = mysqli_fetch_row($resultado))
{
	echo "<tr>";
	echo "<td>".$fila[0]."</td>";
	echo "<td>".$fila[1]."</td>";
    echo "<td>".$fila[2]."</td>";
    echo "<td>".$fila[3]."</td>";
    echo "<td>".$fila[4]."</td>";
    echo "<td>".$fila[5]."</td>";
    echo "<td>".$fila[6]."</td>";
    echo "<td>".$fila[7]."</td>";
    echo "<td>".$fila[8]."</td>";
	echo "<tr>";
}
?>
</table>

<a href="../dashboard.php">Volver</a>
        <!-- </div> -->
    </div>
</body>
</html>