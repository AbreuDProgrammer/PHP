<?php
    #array1
    $cor[0] = "vermelho";
    $cor[1] = "verde";
    $cor[2] = "azul";
    print_r($cor[2]);
    $cor[5] = "amarelo"; #indice nao pode ser menor que o anterior
    $cor[true] = "verdadeiro"; #indice pode ser boolean
    $cor["sus"] = "amongus"; #indice pode ser em texto
    //print_r($cor["sus"]); #mostra o array indicando o indice e o conteudo
    #array2
    $ar01 = array(); #cria com indice de sequencia logica
    $ar01[] = "PHP";
    $ar01[] = "JS";
    $ar01[] = "HTML";
    $ar01[] = "CSS";
    $ar01[] = "PYTHON";
    //print_r($ar01);
    for($i = 0; $i < count($ar01); $i++){ #count(x) == x.length
        //echo $ar01[$i]."</br>"; #."</br>" quebra a linha
    };
    $ar02 = array(1,2,3,4,5,6); #cria um array com sequencia logica quando sabe todo o conteudo do array
    //print_r($ar02);
    $ar03 = array( 0 => 0, 2 => 3, 10 => "item 10"); #cria um array quando sabe todo o conteudo do array
    //print_r($ar03);
    $pessoa = array(
        array('l'=>"leo",'s'=>"sergio",'t'=>"torres"),
        array("danilo","draikon","vlad")
    ); #array multidimensionals
    //print_r($pessoa); #mostra todo o array
    //print_r($pessoa[0]['t']); #mostra indice 0 - t = torres
?>