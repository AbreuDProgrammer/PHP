<?php  
    /*
        function imprimeTxt($txt){
            print $txt.'</br>';
        }
    */
    $ok = "OKOK";
    //imprimeTxt($ok);
    function soma(&$n,$n2){
        $n += $n2;
    }
    $a = 3;
    $b = 5;
    /*
        imprimeTxt($a);
        imprimeTxt($b);
        soma($a,$b);
        imprimeTxt($a);
        imprimeTxt($b);
    */
    function teste($n = 'sergio',$i = 20){
        echo 'nome '.$n.' idade '.$i.'</br>'; 
    }
    /*
        teste('danilo',17);
        teste('guilherme');
        teste('leo',16);
        teste();
    */
    //function forma primitiva.
    $func = function($n){
        echo '-> '.$n.'</br>';
    };
    //$func('leo');  
?>