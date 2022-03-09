<?php
    //verifica se houve POST e se o user ou a password sao vazio
    if(!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['password']))){
        header("Location: login.php");
        exit;
    }
    include_once './config.php';
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $sql = "SELECT * FROM `dono` WHERE (`nome` = '".$user."') AND (`password` = '".sha1($password)."')";
    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query) != 1){
        echo "Login invalido";
        header("Location: index.php");
        exit;
    }
    $res = mysqli_fetch_assoc($query);
    //Se a sessao nao existir cria
    if(!isset($_SESSION))
        session_start();
    $_SESSION['id'] = $res['id'];
    $_SESSION['nome'] = $res['nome'];
    $_SESSION['password'] = $res['password'];
    $_SESSION['nivel'] = $res['level'];
    $_SESSION['email'] = $res['email'];
    header("Location: index.php");
?>