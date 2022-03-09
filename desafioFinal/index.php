<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <link rel="stylesheet" href="./css/style.css">
        <title>Home</title>
    </head>
    <body>
        <?php if(!isset($_SESSION)) session_start(); ?>
        <header class="header">
            <img src="./img/logo.png" alt="logo" id="logo">
        </header>
        <section class="section_banner">
            <h1>Produtos de outro mundo</h1>
        </section>
        <?php if(!isset($_SESSION['id'])): ?>
        <div class="loginA">
            <a href="login.php">Login</a>
        </div>
        <?php else: ?>
        <div class="login">
            <a href="user.php">
                <img src="./img/account.png" alt="login">
            </a>
        </div>
        <?php endif; ?>
        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        <?php include_once './functions.php'; ?>
        <?php $lista = artigosList(); ?>
        <main class="artigoMain">
            <?php foreach($lista as $artigos): ?>
                <div class="artigos">
                    <table>
                        <tr>
                            <td><h1><?php echo $artigos['nome']; ?></h1></td>
                        </tr>
                        <tr>
                            <td><img class="imgArtigo" src="<?php echo $artigos['img']; ?>" title="<?php echo $artigos['nome']; ?>" alt="<?php echo $artigos['idArtigo']; ?>"></td>
                        </tr>
                        <tr>
                            <td><h3><a href="artigo.php?id=<?php echo $artigos['idArtigo']; ?>">Mais</a></h3></td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
        </main>
        <div class="footer">
            <footer>
                <div>Copyright Leonardo</div>
            </footer>
        </div>
    </body>
</html>