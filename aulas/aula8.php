<?php  
    #Array
    /*
    Sort-Ordena um array
    bool sort(array &$array, int $sort_flags)
    SORT_REGULAR - compara os itens normalmente
    SORT_NUMERIC - compara os itens numericamente
    SORT_STRING - compara os itens como strings
    */
    function ver($i){
        foreach($i as $c => $v){
            echo "Array[".$c."] = ".$v.'</br>';
        }
        echo '</br>';
    }
    function ordena(&$array, $tipo){
        switch($tipo){
            case "sort":
                sort($array);
                break;
        }
    }
    $frutas = array("limao","abacaxi","laranja","banana","melancia");
    #ver($frutas);
    sort($frutas);
    #ver($frutas);
    /*
    Conta o numero de elementos de uma variavel, ou propriedades de um objeto.
    int count(mixed $var)
    COUNT_RECURSIVE(ou 1)
    */
    $mult = array(array("leo","danilo","draikon"),array(1,2,5),array(true,false));
    $resultado = count($mult,1);
    #echo "Array de tamanho: ".$resultado.'</br>';
    //count() retorna 0 para null e para 0 conteudo
    //use isset() para verificar e existencia da variavel
    $a = "pimba";
    $b = "bababui";
    #echo isset($a).'</br>';
    #echo isset($a,$b).'</br>';
    #var_dump(isset($a));
    /* *
    liberta a var unset(var);
    */
    unset($a);//elimina a var
    #echo '</br>'.isset($a);
    #var_dump(isset($a));
    #var_dump(isset($b));
    //teste existencia
    $verifica = 12;
    if(isset($verifica))
        #echo '</br>'."Existe";
    /*
        Next-Avança o ponteiro interno de um array. mixed next (array &$array)
        Retorna o elemento do array que esta na proxima posicao que e apontada pelo ponteiro interno do array,
        ou FALSE case nao existam mais elementos.
    */
    //metodos de interacao
    $diaSemana = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado");
    /*$modo = current($diaSemana);
    echo $modo.'</br>';
    $modo = next($diaSemana);
    echo $modo.'</br>';
    $modo = next($diaSemana);
    echo $modo.'</br>';
    $modo = prev($diaSemana);
    echo $modo.'</br>';
    $modo = end($diaSemana);
    echo $modo.'</br>';*/
    /*$modo = current($diaSemana);
    for($i = 0; $i < count($diaSemana);$i++){
        $modo = next($diaSemana);
        echo $modo.' ';
    }*/
    /*while($modo = next($diaSemana))
        echo $modo." ";*/
    //in_array - procura se um valor existe num array, a comparacao é feita em case sensitive retorna bool
    $ar = array("Mac","NT","Win","Linux","NT");
    if(in_array("Mac",$ar))
        echo "Tem Mac".'</br>';
    //array_search - procura por um valor num array e retorna a chave correspondesnte caso seja encontrado ou False cas nao
    $indice = array_search("NT",$ar);
    echo $indice.'</br>';
    //array_keys - mostra todas as chaves com o valor correspondente
    print_r(array_keys($ar,"NT"));
?>