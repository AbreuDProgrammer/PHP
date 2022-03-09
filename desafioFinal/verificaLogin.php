<?php
    if(!isset($_SESSION))
        session_start();
    if(!isset($_SESSION['id'])){
        //destroi a sessao por seg
        session_destroy();
        header("Location: index.php");
        exit;
    }
?>