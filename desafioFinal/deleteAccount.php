<?php 
    include_once 'verificaLogin.php';
    include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="">
            <h1>Certeza?</h1>
            <p>Isto deletará sua conta e seus respectivos artigos</p>
            <input type="submit" value="deletar" name="delete">
            <input type="submit" value="cancelar" name="cancel">
        </form>
        <?php        
            if(isset($_POST['delete'])) 
                apagaConta($_SESSION['id']);
            elseif(isset($_POST['cancel']))
                header("Location: ./index.php");
        ?>
    </body>
</html>