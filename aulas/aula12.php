<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title>SQL PHP Simples</title>
    </head>
    <body>
        <?php
            /*Cria uma conecao com o servidor referenciado no 1 argumento, segundo argumento user que tem que estar
            registrado no servidor referido, bem como a pass referente ao user, o ultimo referencia a BD*/
            $conexao = mysqli_connect('localhost','root','','epcc_prog20');
            //selecionar base de dados (php) existente no servidor identificado na conexao
            mysqli_select_db($conexao,'epcc_prog20');
            //String com sql
            $consulta = 'SELECT IdPessoa, nomePessoa FROM pessoa';
            if($resultado = mysqli_query($conexao, $consulta)){
                echo "quantidade ".mysqli_num_rows($resultado);
                echo "<div>Nome<br>";
                while($linha = mysqli_fetch_row($resultado)){
                    echo "$linha[0]".' ';
                    echo "$linha[1]".'<br>';
                }
                echo "</div>";
            }else
                echo "Erro na ligação a base de dados";
            //imprime valor de identificacao da conexao ativa
            echo "Conexao: ".mysqli_get_host_info($conexao).'<br>';
            echo "Servidor sql: ".mysqli_get_server_info($conexao).'<br>';
            $consulta = "SELECT idPessoa, nomePessoa FROM pessoa WHERE nomePessoa LIKE 'Le%'";
            $resultado = mysqli_query($conexao, $consulta);
            echo "<div>Exemplo 2 Nomes<br>";
            while($linha = mysqli_fetch_row($resultado)){
                echo "$linha[0]".' ';
                echo "$linha[1]".'<br>';
            }
            echo "</br>";
            //funcao de execucao de sql numa ligacao
            function executaQuery($conexao, &$query){
                echo "Executado atraves de função.<br>Conexão".mysqli_get_host_info($conexao).'<br>';
                echo "<div>Nome<br>";
                while($linha = mysqli_fetch_row($query)){
                    echo "$linha[0]".' ';
                    echo "$linha[1]".'<br>';
                }
                echo "</div>";
            }
            $consulta = "SELECT idPessoa, nomePessoa FROM pessoa WHERE nomePessoa LIKE '%e'";
            $resultado = mysqli_query($conexao, $consulta);
            executaQuery($conexao,$resultado);
        ?>
    </body>
</html>