<?php
    include_once './functions.php';
    include_once './verificaLogin.php';
    if(!isset($_GET['user']))
        $conta = listaContaDeId($_SESSION['id']);
    else
        $conta = listaContaDeId($_GET['user']);
    switch($_GET['tipo']){
        case "nome":
            $sql = "UPDATE `dono` SET nome = '".$_POST['nome']."' WHERE id = ".$conta['id'];
            $query = mysqli_query($connection, $sql); 
            header("Location: user.php");
        break;
        case "email":
            $sql = "UPDATE `dono` SET email = '".$_POST['email']."' WHERE id = ".$conta['id'];
            $query = mysqli_query($connection, $sql);
            header("Location: user.php");
        break;
        case "senha":
            $arquivo = "SELECT `password` FROM `dono` WHERE id = ".$conta['id'];
            $queryN = mysqli_query($connection, $arquivo);
            $fetch = mysqli_fetch_assoc($queryN);
            if($_POST['passwordNova']===$_POST['passwordNova2'] && sha1($_POST['passwordAntiga'])===$fetch['password']){
                $sql = "UPDATE `dono` SET password = '".sha1($_POST['passwordNova'])."' WHERE id = ".$conta['id'];
                $query = mysqli_query($connection, $sql);
                header("Location: user.php");
            }else{
                header("Location: ./editarDados.php?id=21");
            }
        break;
        case "level":
            $sql = "UPDATE `dono` SET level = b'".$_POST['level']."' WHERE id = ".$conta['id'];
            $query = mysqli_query($connection, $sql);
            header("Location: user.php");
        break;
    }
?>