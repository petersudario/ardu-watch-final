<?php
include "scripts/conexao.php";

$gx_rec = $_GET['gx'];
$gy_rec = $_GET['gy'];
$bpm_rec = $_GET['bpm'];
$oxigenacao_rec = $_GET['ox'];
$tempo_rec = $_GET['hora'];
$dia_rec = $_GET['diaAno'];


$SQL_INSERT = "UPDATE gps SET geox = $gx_rec, geoy = $gy_rec";
$SQL_INSERT2 = "UPDATE oximetro SET oxigenacao = $oxigenacao_rec, bpm = $bpm_rec";  
$SQL_INSERT3 = "UPDATE rtc SET tempo = CURRENT_TIMESTAMP, dia = CURRENT_DATE"; 



$resultado = mysqli_multi_query($conexao, $SQL_INSERT) or die (mysqli_error());
$resultado = mysqli_multi_query($conexao, $SQL_INSERT2) or die (mysqli_error());
$resultado = mysqli_multi_query($conexao, $SQL_INSERT3) or die (mysqli_error());

header("location: site.php");


?>
