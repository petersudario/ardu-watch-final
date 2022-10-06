<?php
include "conexao.php";

$gx_rec = $_GET['gx'];
$gy_rec = $_GET['gy'];


echo $gx_rec;

$SQL_INSERT = "INSERT INTO  `gps`(geox, geoy) VALUES ('$gx_rec', '$gy_rec')";
$resultado = mysqli_query($conexao, $SQL_INSERT) or die (mysqli_error());
header("location: listGps.php");
?>