<?php
    /*                                                                       //
        $a = "fora da funcao";                                              //
        function teste(){                                                  //
            $a = "dentro da funcao";                                      //
            echo $a.'</br>';                                             //
        }                                                               //
        teste();                                                       //
        echo $a.'</br>';                                              //
    */                                                               //
    /*                                                              //
        $b = "df";                                                 //
        function teste2(){                                        //
            global $b;                                           //
            echo "dentro ".$b.'</br>';                          //
        }                                                      //
        teste2();                                             //
        echo  "fora ".$b.'</br>';                            //
    */                                                      //
    /*                                                     //
        $c = "variavelC";                                 //
        function teste2(){                               //
            echo "dentro ".$GLOBALS["c"].'</br>';       //
        }                                              //
        teste2();                                     //
        echo  "fora ".$c.'</br>';                    //
    */                                              //
    /*                                             //
        function pai(){                           //
            function filho(){                    //
                echo "Eu sou o filho".'</br>';  //
            }                                  //
            echo "Eu sou o pai".'</br>';      //
        }                                    //
        pai();                              //
        filho();                            ||
    */#                                     \\
    /*                                       \\
        function soma($i,$j){                //
            return $i+$j;                   //
        }                                  //
        $resultado = soma(45,65);         //
        echo "o resultado é ".$resultado;//
    */
    $info = array("Sergio",30,"Funchal");
    list($nome,$idade,$morada) = $info;
    //echo $nome." tem ".$idade." e mora em ".$morada;
    /*
        $h = "Hamburguer ";
        for($i = 0; $i < 10000; $i++){
            echo $h;
        }
    */
?>