<?php 

$palavra = $_POST['palavra'];
$quantidade = $_POST['quantidade'];

    for ($i = 0; $i < $quantidade; $i++){
            echo $palavra."<br>";
    }
?>