<?php
    include_once 'verificaLogin.php';
    include_once './functions.php';
    if(!isset($_GET['user']))
        $conta = listaContaDeId($_SESSION['id']);
    else
        $conta = listaContaDeId($_GET['user']);
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <link rel="stylesheet" href="./css/style.css">
        <title>Home</title>
    </head>
    <body>
        <?php switch($_GET['id']): case 0: ?>
        <form action="altera.php?tipo=nome&user=<?php echo $conta['id']; ?>" method="post">
            <table>
                <tr>
                    <td>Nome Antigo: </td>
                    <td><input type="text" name="nomeA" value="<?php echo $conta['nome']; ?>" disabled></td>
                </tr>
                <tr>
                    <td>Novo Nome: </td>
                    <td><input type="text" name="nome" value=""></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="save">
                    </td>
                </tr>
            </table>
        </form>
        <?php break; case 1: ?>
        <form action="altera.php?tipo=email&user=<?php echo $conta['id']; ?>" method="post">
            <table>
                <tr>
                    <td>Email Antigo: </td>
                    <td><input type="text" name="emailA" value="<?php echo $conta['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Novo Email: </td>
                    <td><input type="text" name="email" value=""></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="save">
                    </td>
                </tr>
            </table>
        </form>
        <?php break; case 21: case 2:?>
        <form action="altera.php?tipo=senha&user=<?php echo $conta['id']; ?>" method="post">
            <table>
                <tr>
                    <td>Password antiga: </td>
                    <td><input type="password" name="passwordAntiga" value=""></td>
                </tr>
                <tr>
                    <td>Password nova: </td>
                    <td><input type="password" name="passwordNova" value=""></td>
                </tr>
                <tr>
                    <td>Repita: </td>
                    <td><input type="password" name="passwordNova2" value=""></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="save">
                    </td>
                </tr>
            </table>
        </form>
        <?php if($_GET['id']==21): ?>
        <h1>Password Error</h1>
        <?php endif; break; case 3: ?>
            <form action="altera.php?tipo=level&user=<?php echo $conta['id']; ?>" method="post">
            <table>
                <tr>
                    <td>Level antigo: </td>
                    <td><input type="text" name="levelA" value="<?php echo $conta['level']; ?>"></td>
                </tr>
                <tr>
                    <td>Level novo: </td>
                    <td><input type="text" name="level" value=""></td>
                </tr>
                    <td>
                        <input type="submit" value="save">
                    </td>
                </tr>
            </table>
        </form>
        <?php endswitch; ?>
    </body>
</html>