<?php
    include_once './verificaLogin.php';
    include_once './functions.php';
    if(isset($_POST['save']))
        criarArtigo();
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>Criar Artigo</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nome: </td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Descrição: </td>
                    <td><input type="text" name="descricao"></td>
                </tr>
                <tr>
                    <td>ImgPath: </td>
                    <td><input type="file" name="img" value="img"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Criar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>