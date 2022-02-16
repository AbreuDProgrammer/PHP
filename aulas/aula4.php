<?php
    /*  
        for($i = 1; $i <= 10; $i++)
            echo $i.'</br>';
    */
    /*
        for($i = 10; $i >= 1; $i--)
                echo $i.'</br>';
    */
    /*
        $i = 1;
        for(; ;){
            if($i > 10)
                break;
            echo $i++.'</br>';
        }
    */
    /*for($i = 1,$j = 0; $i <= 10;$j += $i, print "i->".$i." j->".$j.'</br>', $i++);*/
    $arr = array(1,2,3,4,5);
    /*
        foreach($arr as $v)
            echo $v.'</br>';
    */
    /*
        foreach($arr as &$v){
            $v *= 2;
            echo $v.'</br>';
        }
    */
    /*
        foreach($arr as $c => $v)
            echo "chave: ".$c." valor: ".$v.'</br>';
    */
    /*
        $arrM = array();
        $arrM[0][0] = "a";
        $arrM[0][1] = "b";
        $arrM[1][0] = "c";
        $arrM[1][1] = "d";
    */
    /*
        foreach($arrM as $linhas)
            foreach($linhas as $colunas)
                echo $colunas.'</br>';
    */
    $arrM = array(
        array("a","b"),
        array("c","d")
    );
    for($i = 0; $i < count($arrM);$i++)
        for($j = 0; $j < count($arrM[$i]);$j++)
            echo $arrM[$i][$j].'</br>';
?>