<?php
include "conexao.php";

$oxigenacao_rec = $_GET['ox'];
$bp_rec = $_GET['bp'];
$bpm_rec = $_GET['bpm'];

echo $oxigenacao_rec;
echo $bp_rec;
echo $bpm_rec;

$SQL_INSERT = "INSERT INTO  `oximetro`(oxigenacao, bp, bpm) VALUES ('$bp_rec', '$bpm_rec', '$oxigenacao_rec')";
$resultado = mysqli_query($conexao, $SQL_INSERT) or die (mysqli_error());
header("location: listOximetro.php");
?>