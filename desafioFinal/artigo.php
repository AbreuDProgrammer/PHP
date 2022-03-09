<?php include_once './functions.php'; ?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>Artigo</title>
    </head>
    <body>
        <?php $fetch = validarArtigo($_GET['id']); ?>
        <table>
            <tr>
                <td><?php echo $fetch['nome']; ?></td>
            </tr>
            <tr>
                <td><?php echo $fetch['descricao']; ?></td>
            </tr>
            <tr>
                <td><img width="150px" src="<?php echo $fetch['img']; ?>" alt="artigo <?php echo $fetch['nome'] ?>"></td>
            </tr>
        </table>
    </body>
</html>