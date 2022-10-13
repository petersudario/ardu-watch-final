<?php
include "conexao.php";

$gx_rec = $_GET['gx'];
$gy_rec = $_GET['gy'];
$bpm_rec = $_GET['bpm'];
$oxigenacao_rec = $_GET['ox'];
$tempo_rec = $_GET['hora'];
$dia_rec = $_GET['diaAno'];


echo $gx_rec;

$SQL_INSERT = "INSERT INTO  `gps`(geox, geoy) VALUES ('$gx_rec', '$gy_rec')";
$SQL_INSERT2 = "INSERT INTO  `oximetro`(oxigenacao, bpm) VALUES ('$oxigenacao_rec','$bpm_rec')";
$SQL_INSERT3 = "INSERT INTO  `rtc`(tempo, dia) VALUES ('$tempo_rec', '$dia_rec')";
$resultado = mysqli_multi_query($conexao, $SQL_INSERT) or die (mysqli_error());
$resultado = mysqli_multi_query($conexao, $SQL_INSERT2) or die (mysqli_error());
$resultado = mysqli_multi_query($conexao, $SQL_INSERT3) or die (mysqli_error());

header("location: site.php");
?>


/*

$oxig = $linha["oxigenacao"];
        $bpm = $linha["bpm"];
        $gx = $linha["geox"];
        $gy = $linha["geoy"];
        $t = $linha["tempo"];
        $d = $linha["dia"];