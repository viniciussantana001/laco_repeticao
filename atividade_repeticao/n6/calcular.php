<?php 

$numero = $_POST['numero'];
$aux = 0;

    while ($aux <= $numero){
        if ($aux % 2 == 0){
            echo $aux."<br>";
        }
        $aux++;
    }
?>