<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title>Exemplo 2 - Sessões PHP</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['nome'],$_SESSION['permite'])){
                echo 'Sessao id: '.session_id().'</br>';
            }
            if($_SESSION['permite'] !== 'Sim'){
                echo "Sem permissao";
            }else{
                echo "Tem permissao ".$_SESSION['nome'];
            }
        ?>
        <form name="form1" method="post" action="">
            <input type="text" name="texto" value="" placeholder="Texto">
            </br>
            <input type="text" name="info" value="" placeholder="Info">
            </br>
            <input type="text" name="email" value="" placeholder="Email">
            </br>
            <input type="submit" name="Submit" value="Enviar">
        </form>
    </body>
</html>