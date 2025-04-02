<?php 

$numero = $_POST['numero'];

    while (0 < $numero){
        if ($numero % 2 == 0){
            echo $numero."<br>";
        }
        $numero--;
    }
?>