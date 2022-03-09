<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='UTF-8'>
        <title>Login</title>
    </head>
    <body>
        <form action="validacao.php" method="post">
            <fieldset>
                <legend>Dados de Login</legend>
                <label for="txUser">User</label>
                <input type="text" name="user" id="txUser" maxlength="25">
                <label for="txPassword">Password</label>
                <input type="password" name="password" id="txPassword">
                <input type="submit" value="Entrar">
            </fieldset>
        </form>
        <p>Não tem conta? <a href="./createAccount.php">Criar conta</a></p>
    </body>
</html>