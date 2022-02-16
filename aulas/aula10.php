<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title> Exemplo 1 - Sessões PHP</title>
    </head>
    <body>
        <?php
            /*
            $_POST -> array que guarda toda a informacao passada pelo metodo post
            Sendo o indice o valor da entrada de controlo name do input('texto'),
            representa o parametro name do input
            */
            if(isset($_POST['texto'], $_POST['info'], $_POST['email'])){
                echo "Texto-> ".$_POST['texto']."</br>";
                echo "Info-> ".$_POST['info']."</br>";
                echo "Email-> ".$_POST['email']."</br>";
            }
            if(isset($_POST['texto']) && empty($_POST['info']) <> TRUE){
                $valorpassado = $_POST['texto'];
                $valorEmail = $_POST['info'];
                echo $valorpassado.'-'.$valorEmail;
            }
            //Var server
            echo $_SERVER['HTTP_USER_AGENT']."</br>"; //browser
            echo $_SERVER['SERVER_PORT']."</br>"; //porta onde corre o servidor
            echo $_SERVER['REQUEST_METHOD']."</br>"; //
            echo $_SERVER['PHP_SELF']."</br>"; //a pagina atual
            //Metodo que devolve o tempo
            $nextWeek = time() + (7 * 24 * 60 * 60);
            echo 'Hoje: '.date('Y-m-d')."</br>";
            echo 'Proxima semana '.date('Y-m-d', $nextWeek)."</br>";
            $hora = date("H:i:s");
            echo $hora."</br>";
            //Se o botao submit foi clicado redireciona
            function redireciona(){
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']),'\//');
                $extra = "aula4.php";
                //$host$uri$extra
                header("Location: http://$host$uri/$extra");
            }
            if(isset($_POST['Submit'])){
                gravacao();
            }
            function gravacao(){
                /*
                cria cookies de nome, valor metodo setcookie (2arg)
                */
                /*setcookie("cookie1","leonardo");
                setcookie("cookie2","danilo");
                setcookie("cookie3","guilherme");
                echo $_COOKIE['cookie1'];
                $umDia = time() + 86400;
                setcookie("USER","leonardopaulo",$umDia);
                $nextWeek = time() + (7 * 24 * 60 * 60);
                setcookie("PASS","1234",$nextWeek);*/
                $umDia = time() + 86400;
                setcookie("USER","leonardopaulo",$umDia);
                $str = 'Bem-vindo ';
                //$str .= $_COOKIE['USER']!=''?$_COOKIE['USER']:'Convidado';
                $str .= isset($_COOKIE['USER'])?$_COOKIE['USER']:"convidado";
                echo $str;
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