<?php
    $arquivo = $_FILES['arquivo'];
    print_r($arquivo); echo '<br>';
    echo $arquivo['name'].'<br>'; echo '<br>';
    foreach($arquivo as $chave => $conteudo){
        echo $chave." : ".$conteudo.'<br>';
    }
    $tipo = array("image/jpg","image/jpeg");
    if($arquivo['type'] == $tipo[0] || $arquivo['type'] == $tipo[1]){
        if($arquivo['size']>5000000)
            exit('Arquivo muito grande. Tamanho maximo permitido 5000Kb. O arquivo enviado contem '.round($arquivo['size']/1024, 3).'Kb');
        $novoNome = md5($arquivo['tmp_name'].$arquivo['name']).'.jpg';
        $dir = "img/";
        if(!file_exists($dir)){
            mkdir($dir, 0755);
            //0-pasta ou arquivo 7-admin 5-grupo 5-publico
            // 1-execucao 2-escrever 4-ler
        }
        $caminho = $dir.$novoNome;
        //Metodo responsavel por mover o ficheiro que esta na memoria temporaria para uma morada fixa
        move_uploaded_file($arquivo['tmp_name'],$caminho);
        echo '<script type="text/javascript">alert("Arquivo enviado!")</script>';
        echo '<meta http-equiv="refresh" content="1; url=index.php">';
    }else{
        echo '<script type="text/javascript">alert("Arquivo inválido, apenas aceito arquivos de formato jpg ou jpeg")</script>';
        echo '<meta http-equiv="refresh" content="1; url=index.php">';
    }
?>