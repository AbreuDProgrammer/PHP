<?php
    include_once 'verificaLogin.php';
    include_once './functions.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>Login</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Nome: </td>
                <td>
                    <input type="text" name="tNome" value="<?php echo $_SESSION['nome']; ?>">
                </td>
                <td><a href="editarDados.php?id=0">Editar</a></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="text" name="tEmail" value="<?php echo $_SESSION['email']; ?>">
                </td>
                <td><a href="editarDados.php?id=1">Editar</a></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="tPassword" value="">
                </td>
                <td><a href="editarDados.php?id=2">Editar</a></td>
            </tr>
            <tr>
                <td><a href="./index.php">Home</a></td>
                <td><a href="./logout.php">Logout</a></td>
                <td><a href="./deleteAccount.php">Delete Account</a></td>
            </tr>
            <?php if($_SESSION['nivel']==1): ?>
            <tr>
                <td><a href="./contas.php">Gerenciar Contas</a>
            </tr>
            <?php endif; ?>
        </table>
        <h2><a href="./criarArtigo.php">Criar Artigo</a></h2>
        <?php $lista = artigosListUser(); ?>
        <main class="artigoMain">
            <?php if(!empty($lista)) foreach($lista as $artigos): ?>
                <article class="artigoArticle">
                    <h2><?php echo $artigos['nome']; ?></h2>
                    <img width="150px" src="<?php echo $artigos['img']; ?>" title="<?php echo $artigos['nome']; ?>" alt="<?php echo $artigos['idArtigo']; ?>">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>IdArtigo: </td>
                                <td><input type="text" name="idArtigo" value="<?php echo $artigos['idArtigo']; ?>" disabled></td>
                            </tr>
                            <tr>
                                <td>IdDono: </td>
                                <td><input type="text" name="idDono" value="<?php echo $artigos['idDono']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Nome: </td>
                                <td><input type="text" name="nome" value="<?php echo $artigos['nome']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Descrição: </td>
                                <td><input type="text" name="descricao" value="<?php echo $artigos['descricao']; ?>"></td>
                            </tr>
                            <tr>
                                <td>ImgPath: </td>
                                <td><input type="text" name="img" value="<?php echo $artigos['img']; ?>"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="idArtigo" value="<?php echo $artigos['idArtigo']; ?>">
                                    <input type="submit" value="save" name="save">
                                    <input type="submit" value="delete" name="delete">
                                </td>
                            </tr>
                        </table>
                    </form>
                </article>
            <?php endforeach; ?>
        </main>
        <?php 
        if(isset($_POST['delete'])) 
            apagaArtigo($_POST['idArtigo']);
        elseif(isset($_POST['save']))
            saveArtigo($_POST['idArtigo']);
        ?>
    </body>
</html>