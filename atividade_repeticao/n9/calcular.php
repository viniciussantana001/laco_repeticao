<?php 

$numero = $_POST['numero'];
$intervalo = $_POST['intervalo'];

    for ($i = 0; $i <= $numero; $i+=$intervalo){
        echo $i."<br>";
    }
?>