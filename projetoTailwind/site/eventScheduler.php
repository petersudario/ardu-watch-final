<?php


function schedulerOn(){
    include "conexao.php";
    $SQL_UPDATE2 = "SET GLOBAL event_scheduler=ON";
    $resultado = mysqli_multi_query($conexao, $SQL_UPDATE2) or die (mysqli_error());

}

function schedulerOff(){
    include "conexao.php";

    $SQL_UPDATE2 = "SET GLOBAL event_scheduler=OFF";
    $resultado = mysqli_multi_query($conexao, $SQL_UPDATE2) or die (mysqli_error());
}

?>