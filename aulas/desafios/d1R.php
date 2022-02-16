<?php
    function lista($a){
        for($i = 0; $i < count($a); $i++){
            echo $a[$i].'</br>';
        }
    }
    function devolve($teste, $tipo = false){
        return stristr($teste, "@", $tipo);
    }
    function divide($le){
        $d = array();
        $nd = array();
        for($i = 0; $i < count($le); $i++){
            $d[$i] = devolve($le[$i], true);
            $nd[$i] = devolve($le[$i]);
        }
        return ['d' => $d, "nd" => $nd];
    }
    $le = array("leo@gmail.com");
    $r = divide($le);
    lista($r['d']);
    lista($r['nd']);
?>