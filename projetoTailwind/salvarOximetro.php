<?php
include "conexao.php";

$oxigenacao_rec = $_GET['ox'];
$bpm_rec = $_GET['bpm'];

echo $oxigenacao_rec;
echo $bpm_rec;

$SQL_INSERT = "INSERT INTO  `oximetro`(oxigenacao, bpm) VALUES ('$bpm_rec', '$oxigenacao_rec')";
$resultado = mysqli_query($conexao, $SQL_INSERT) or die (mysqli_error());
header("location: listOximetro.php");
?>