<?php
    //tipo 1
    $array1[0] = "A"; #comeca com indice qualquer
    $array1[1] = "B";
    $array1[2] = "C";
    $array1[5] = "D"; #indice tem que ser maior que o anterior
    $array1["e"] = "E"; #pode ser de tipo String, boolean, integer ou qualquer outro var
    print_r($array1); #imprime todo o array com os indices indicados ([0] => A [1] => B [2] => C [5] => D [e] => E)
    echo '</br>';
    //tipo 2
    $array2 = array();
    $array2[] = 1;
    $array2[] = 2;
    $array2[] = 3;
    print_r($array2); #( [0] => 1 [1] => 2 [2] => 3)
    echo '</br>';
    //tipo 3
    $array3 = array(1,2,3,"A","B","C");
    print_r($array3); #([0] => 1 [1] => 2 [2] => 3 [3] => A [4] => B [5] => C)
    echo '</br>';
    //tipo 4
    $array4 = array(0 => 1, 1 => 2, "c" => "C");
    print_r($array4); #([0] => 1 [1] => 2 [c] => C)
    echo '</br>';
    //tipo multidimensional
    $array5 = array(
        array(1,2,3),
        array("A","B","C")
    );
    print_r($array5); #([0] => Array ( [0] => 1 [1] => 2 [2] => 3 ) [1] => Array ( [0] => A [1] => B [2] => C)
    echo '</br>';
?>