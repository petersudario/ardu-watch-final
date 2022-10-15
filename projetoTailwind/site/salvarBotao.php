<?php


include "conexao.php";




    $SQL_INSERT4 = "UPDATE botao SET pressionado = 0";
    

    $resultado = mysqli_multi_query($conexao, $SQL_INSERT4) or die (mysqli_error());

    

?>                   