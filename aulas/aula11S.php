<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title>Exemplo 2 - Sessões PHP</title>
    </head>
    <body>
        <?php
            if(isset($_POST['Submit'])){
                session_start(); //cria uma nova sessao
                $test = session_id(); //variavel sessao criada com um codigo unico
                echo '-> '.$test.'</br>';
                if(isset($test)){
                    $_SESSION['nome'] = 'Leonardo';
                    $_SESSION['permite'] = 'Sim';
                }
                if($_SESSION['permite'] !== 'Sim'){
                    echo "Sem permissao";
                }else{
                    echo "Tem permissao ".$_SESSION['nome'];
                    header("Location: aula11P.php");
                }
            }
        ?>
        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="texto" value="" placeholder="Texto">
            </br>
            <input type="text" name="email" value="" placeholder="Email">
            </br>
            <input type="submit" name="Submit" value="Enviar">
        </form>
    </body>
</html>