<?php
include "conexao.php";

$tempo_rec = $_GET['hora'];
$dia_rec = $_GET['diaAno'];

echo $tempo_rec;
echo $dia_rec;

$SQL_INSERT = "INSERT INTO  `rtc`(tempo, dia) VALUES ('$tempo_rec', '$dia_rec')";
$resultado = mysqli_query($conexao, $SQL_INSERT) or die (mysqli_error());
header("location: listRtc.php");
?>