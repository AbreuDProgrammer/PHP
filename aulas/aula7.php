<?php  
    //Modificador static
    function rec(){
        $a = 0;
        echo $a.'</br>';
        $a++;
    }
    #rec();
    //-------------------
    function rec1(){
        static $a = 0;
        echo $a.'</br>';
        $a++;
    }
    #rec1();
    #rec1();
    #rec1();
    //-------------------
    function rec2(){
        static $a = 0;
        echo $a.'</br>';
        if($a < 10){
            $a++;
            rec2();
        }
    }
    #rec2();
    //$nome = $_GET["nome"];
    //echo "Via uri -> ".$nome.'</br>';
    //$idade = $_GET["idade"];
    //echo "Via uri -> ".$idade.'</br>';
    $url = "http://localhost/Leonardo/phpXampp/aula7.php?nome=danilo&idade=16";
    //codifica segundo a tabela de ascii
    //echo urlencode($url).'</br>';
    $urlC = "http%3A%2F%2Flocalhost%2FLeonardo%2FphpXampp%2Faula7.php%3Fnome%3Ddanilo%26idade%3D16";
    //echo urldecode($urlC).'</br>';
    //verificacao de tipo
    $d = 2;
    function switchs(){
        switch(gettype($d)){
            case 'integer':
                echo "integer".'</br>';
                break;
            case 'string':
                echo "string".'</br>';
                break;
            case 'double':
                echo "double".'</br>';
                break;
            case 'array':
                echo "array".'</br>';
                break;
            case 'object':
                echo "object".'</br>';
                break;
        }
    }
    echo is_integer($d).'</br>';
?>