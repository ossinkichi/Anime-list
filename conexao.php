<?php

    $usuario = 'root';
    $senha ='';
    $host = 'localhost';
    $dbname = 'list_anime';

    $connect = mysqli_connect($host, $usuario, $senha, $dbname) or die(mysqli_error($connect));

?>