<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset='utf-8'>
        <title>FILE</title>
    </head>
    <body>
        <?php
            /*$lines = file('http://www.epcc.pt/');
            foreach($lines as $line_num => $line){
                echo "Linha #<b>{$line_num}</b> : ".$line."<br>";
            }*/
            /*$html = implode('',file('http://www.epcc.pt/'));
            echo '<br>'.$html;*/
            /*$trimmed = file('http://www.epcc.pt/', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($trimmed as $line_num => $line){
                echo "Linha #<b>{$line_num}</b> : ".htmlspecialchars($line)."<br>";
            }*/
            /*$trimmed = file('texto.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach($trimmed as $line_num => $line){
                echo "Linha #<b>{$line_num}</b> : ".htmlspecialchars($line)."<br>";
            }
            echo '<br><br>';
            $lines = file('texto.txt');
            foreach($lines as $line_num => $line){
                echo "Linha #<b>{$line_num}</b> : ".htmlspecialchars($line)."<br>";
            }*/
            /*$filename = './texto.txt';
            file_exists($filename)? $answer = "O arquivo $filename existe" : $answer = "O arquivo $filename não existe";
            echo $answer;
            if(file_exists($filename))
                echo "O arquivo $filename existe";
            else
                echo "O arquivo $filename não existe";*/
            /*$handle = fopen("./texto.txt","r");//Abre para leitura
            echo $handle;
            $handle = fopen("./texto.txt","wb");//Abre para escrita em modo binario
            $handle = fopen("http://www.google.com","r");*/
            /*$filename = 'https://pt.lipsum.com/feed/html';
            if(!$handle = file_get_contents($filename)){
                echo "Não foi possivel abrir o arquivo ($filename)";
                exit;
            }
            echo $handle;
            fclose($handle);*/
            /*$filename = './ok.gif';
            if(!$handle = fopen($filename,'rb')){
                echo "Não foi possivel abrir o arquivo ($filename)";
                exit;
            }
            echo filesize($filename);
            $conteudo = fread($handle,filesize($filename));
            echo $conteudo;
            fclose($handle);*/
            /*$filename = './texto.txt';
            if(file_exists($filename)){
                echo "O arquivo $filename existe";
                $handle = fopen($filename,"rb");
                echo filesize($filename);
                $conteudo = fread($handle,filesize($filename)); 
                echo $conteudo;
                fclose($handle);
            }else{
                echo "O arquivo $filename não existe";
                exit;
            }*/
            /*$filename = './texto.txt';
            $conteudo = "Leonardo";
            if(file_exists($filename)){
                if(is_writable($filename)){
                    if(!$handle=fopen($filename,'a')){
                        echo "Não foi possivel abrir o arquivo $filename";
                        exit;
                    }
                    if(fwrite($handle,$conteudo)===FALSE){
                        echo "Não foi possivel escrever no arquivo $filename";
                        exit;
                    }
                    echo "Sucesso: Escrito '$conteudo' no arquivo $filename";
                    fclose($handle);
                }else
                    echo "O arquivo $filename não pode ser alterado";
            }else{
                echo "O arquivo $filename não existe";
                exit;
            }*/
            $filename = './views.txt';//nome
            $abrir = fopen($filename,"r");//abrir
            $total = fread($abrir,filesize($filename));//lê
            fclose($abrir);//fecha
            $abrir = fopen($filename,"w");//abrir
            $total = $total + 1;//views
            $guardar = fwrite($abrir,$total);//escreve
            fclose($abrir);//fecha
            echo $total;//mostra
        ?>
    </body>
</html>