<?php
    //Transformação exlícita de tipos
    /*$a = 15;
    echo gettype($a)."<br/>";
    $a = (double)($a);
    echo gettype($a)."<br/>";
    $a = 3.9;
    echo "$a".gettype($a)."<br/>";
    $a = (int)($a);
    echo "$a".gettype($a)."<br/>";
    settype($a, "double");
    echo gettype($a)."<br/>";*/
    //Constantes
    //Sintax: define(String de nome, mixed valor)
    /*define("PI",3.1415926536);
    $raio = 4;
    $c = 2*PI*$raio;
    echo $c; 
    // var por referencia
    $nome = 'Danilao';
    $ref = &$nome;
    //$ref = $nome;
    echo $nome.'<br />';
    echo $ref;
    echo '<br />';
    $nome = 'Danilao';
    $ref = $nome;
    //$ref = $nome;
    echo $nome.'<br />';
    echo $ref;
    //Operadores arit.
    // +; - ;* ; /; %
    $a = 1;
    $b = 1;
    $c = $a - $b;
    echo $c;
    echo $c."<br />";
    //Operadores arit. de sob.
    // +=; -=; *=; /=; %=
    $d = 1;
    $e = 1;
    $e += 1 + $d;
    echo $e."<br />";
    //Concat;
    //. ou ,
    $f = "ola ";
    $f .= "Mamilo";
    echo $f."<br />";
    // Operadores logicos
    /*
    && AND
    || OR
    ^ XOR
    ! NEGAÇÃO/NOT 
    */
    // Operadores relacionais
    /*
    // ==; <=; >=; <>; !=; <; >
    // ===; !== -> compra conteudo e tipo de dados
    $tA=1;
    $tB=2;
    $teste = $tA >= 4 && $tB <=133;
    $teste1 = $tA >= 4 || $tB <=133;
    echo $teste;
    echo $teste1."<br />";
    // Exp. condicional
    //Sintaxe ()?v:f;
    $opT = (1==2)?"o valor um é igual ao dois":  "dif.";
    echo $opT."<br />";
    // Incremento e decremento ++ --
    $a = $b = 10;
    echo $a."<br />";
    echo $b."<br />";
    $c = $a++;
    $d = ++$b;
    echo $a."<br />";
    echo $b."<br />";
    echo $c."<br />";
    echo $d."<br />";*/
    /*$a = 10;
    echo 5 + 2 * 3;
    echo ++$a - 4 * 10;
    echo $a++ - 4 * 10;
    echo $a -4 * 10;*/
    /*$a=2;
    $b=2;
    echo "</br>";
    if($a==$b)
        echo "iguais";
    else if($a > $b)
        echo "a é maior que b";
    else
        echo "a é menor que b";*/
    //------------------=-----------------//
    /*$a=2;
    $b=2;
    if($a==$b)
        echo "iguais";
    else 
        if($a > $b)
            echo "a é maior que b";
        else
            echo "a é menor que b";*/
    //------------------!=-----------------//
    /*$a=2;
    $b=2;
    echo "</br>";
    if($a==$b)
        echo "iguais";
    elseif($a > $b)
        echo "a é maior que b";
    else
        echo "a é menor que b";*/
    /*$i = 1;
    switch($i){
        case 0:
            echo "i=0";
            break;
        case 1:
            echo "i=1";
            break;
    }*/
    //------------------||-----------------//
    /*$i = 1;
    switch($i){
        case 0: echo "i=0"; break;
        case 1: echo "i=1"; break;
    }*/
    /*$i = 1;
    while($i <= 10){
        echo "".$i."\t";
        print $i++;
        echo "\t".$i."\n";
    }*/
    //echo "\n";
    /*$i = 1;   
    while($i <= 10){
        echo "".$i."\t";
        print ++$i;
        echo "\t".$i."\n";
    }*/
    /*$i = -10;
    do{
        print $i++."</br>";
    }while($i <= 10);*/
    /*$x = 11;
    while($x++ > 10){
        if($x == 20){
            echo "ok";
            break;
        }
        echo "$x";
    }*/
?>