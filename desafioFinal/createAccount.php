<?php include_once './functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>CreateAccount</title>
    </head>
    <body>
    <form action="" method="post">
        <table>
                <tr>
                    <td>Nome: </td>
                    <td>
                        <input type="text" name="cNome" value="">
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="cEmail" value="">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="cPassword" value="">
                    </td>
                </tr>
                <tr>
                    <td>Repeat Password: </td>
                    <td>
                        <input type="password" name="cPasswordRepeat" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" value="Criar">
                    </td>
                </tr>
            </table>
        </form>
        <?php if(isset($_POST['enviar'])) criaConta();?>
    </body>
</html>