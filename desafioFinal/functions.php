<?php
    include_once './config.php';
    //var globais
    $artigoId;
    $artigoIdDono;
    $artigoNome;
    $artigoDescricao;
    $artigoImg;
    function artigosList(){
        global $connection;
        $sql = "SELECT * FROM `artigos`;";
        $query = mysqli_query($connection, $sql);
        if(mysqli_num_rows($query)>0)
            return $query;
        else
            return;
    }
    function artigosListUser(){
        global $connection, $_SESSION;
        if($_SESSION['nivel']==1)
            $sql = "SELECT * FROM `artigos`";
        else
            $sql = "SELECT * FROM `artigos` WHERE idDono = ".$_SESSION['id'];
        $query = mysqli_query($connection, $sql);
        if(mysqli_num_rows($query)>0)
            return $query;
        else
            return;
    }
    function validarArtigo($artigoId){
        global $connection;
        $sql = "SELECT * FROM `artigos` WHERE idArtigo = $artigoId";
        $db = mysqli_query($connection,$sql);
        if(!$db){
            echo '<p class="form_error">Internal error: Artigo not exist</p>';
            return false;
        }
        $fetch = mysqli_fetch_assoc($db);
        return $fetch;
    }
    function saveArtigo($artigoId){
        global $connection;
        $fetch_artigo = validarArtigo($artigoId);
        $artigo_id = $fetch_artigo['idArtigo'];
        if(!empty($artigo_id)){
            $sql = "UPDATE `artigos` SET idDono = ".$_POST['idDono'].", nome = '".$_POST['nome']."', descricao = '".$_POST['descricao']."', img = '".$_POST['img']."' WHERE idArtigo = $artigoId";
            $query = mysqli_query($connection, $sql);            
        }
        echo '<p>Artigo successfully updated.</p>';
        return;
    }
    function criaConta(){
        global $connection;
        if(isset($_POST['cNome'],$_POST['cEmail'],$_POST['cPassword'],$_POST['cPasswordRepeat'])&&$_POST['cPassword']==$_POST['cPasswordRepeat']){
            $sql = "INSERT INTO `dono` (`id`, `nome`, `email`, `password`, `level`) VALUES (NULL, '".$_POST['cNome']."', '".$_POST['cEmail']."', '".sha1($_POST['cPassword'])."', b'0');";
            $query = mysqli_query($connection, $sql);
        }
        echo "<p>Conta criada com sucesso</p>";
        header("Location: ./login.php");
        return;
    }
    function apagaConta($contaId){
        global $connection;
        $sql = "DELETE FROM `dono` WHERE `dono`.`id` = ".$contaId;
        $query = mysqli_query($connection, $sql);
        header("Location: ./logout.php");
    }
    function apagaArtigo($id){
        global $connection;
        $sql = "DELETE FROM `artigos` WHERE `artigos`.`idArtigo` = ".$id;
        $query = mysqli_query($connection, $sql);
    }
    function listarContas(){
        global $connection;
        $sql = "SELECT * FROM `dono`";
        $query = mysqli_query($connection, $sql);
        return $query;
    }
    function listaContaDeId($id){
        global $connection;
        $sql = "SELECT * FROM `dono` WHERE `id` = ".$id;
        $query = mysqli_query($connection, $sql);
        $fetch = mysqli_fetch_assoc($query);
        return $fetch;
    }
    function criarArtigo(){
        global $connection;
        $img = "./img/".$_POST['img'];
        $sql = "INSERT INTO `artigos` (`idArtigo`, `idDono`, `nome`, `descricao`, `img`) VALUES (NULL, '".$_SESSION['id']."', '".$_POST['nome']."', '".$_POST['descricao']."', '".$img."')";
        $query = mysqli_query($connection, $sql);
    }
?>