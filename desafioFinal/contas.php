<?php 
    include_once './verificaLogin.php';
    include_once './functions.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <link rel="stylesheet" href="./css/style.css">
        <title>Users</title>
        <style>
            table, th, td {
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <?php $fetch = listarContas(); ?>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Nome: </td>
                    <td>Email: </td>
                    <td>Level: </td>
                </tr>
                <?php foreach($fetch as $contas): ?>
                <tr>
                    <td><a href="editarDados.php?id=0&user=<?php echo $contas['id']; ?>"><?php echo $contas['nome']; ?></a></td>
                    <td><a href="editarDados.php?id=1&user=<?php echo $contas['id']; ?>"><?php echo $contas['email']; ?></a></td>
                    <td><a href="editarDados.php?id=3&user=<?php echo $contas['id']; ?>"><?php echo $contas['level']; ?></a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </form>
    </body>
</html>