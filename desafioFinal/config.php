<?php
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']),"/\\");
    $extra = "index.php";
    define('HOME_URI',"http://$host$uri/$extra");
    $connection = mysqli_connect('alunos.epcc.pt','al220038','epcc2020','al220038');
?>