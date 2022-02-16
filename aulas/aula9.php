<?php
    /*
    Sintaxe:
    array explode (string $delimiter, string $string)
    */
    $pizza = "peça1 peça2 peça3";
    $pecas = explode(" ",$pizza);
    echo $pecas[0].'</br>';
    echo $pecas[1].'</br>';
    echo $pecas[2].'</br>';
    $data = "cab:*:1023:1000::/home/cab:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":",$data);
    echo $user;
    /*
    Implode - junta elementos de uma matriz para uma string
    Sintaxe:
    string implode(string $glue, array $pieces)
    */
    $array = array('nome', 'email', 'telefone');
    $separacao = implode(", ",$array);
    echo $separacao.'</br>';
    /*
    Md5 - Calcula o "hash Md5" de uma string.
    Sintaxe:
    string md5 (string $str [, bool $raw_output ])
    raw_output -> formato binario com um tamanho de 16.
    */
    $str = "Leon";
    echo md5($str).'</br>';
    /*
        Ord - retorna o valor ASCII do caractere
        Sintaxe:
        int ord (string $string)
    */
    $str = 'a';
    echo  ord($str).'</br>';
    /*
        chr - retorna um caracter especifico
        Sintaxe:
        string chr (int $ascii)
    */
    $str = chr(97);
    echo $str.'</br>';

    $nome[0] = ord("l");
    $nome[1] = ord("e");
    $nome[2] = ord("o");
    $nome[3] = ord("n");
    echo $nome[0].'</br>';
    echo $nome[1].'</br>';
    echo $nome[2].'</br>';
    echo $nome[3].'</br>';
    $code[0] = chr(108);
    $code[1] = chr(101);
    $code[2] = chr(111);
    $code[3] = chr(110);
    echo $code[0].'</br>';
    echo $code[1].'</br>';
    echo $code[2].'</br>';
    echo $code[3].'</br>';
    /*
        stristr - encontra a primeira ocorrencia de uma string, sem diferenciar maiusculas e minusculas
        Sintaxe:
        string stristr (string $haystack, mixed $needle [, bool $before_needle ])
    */
    $email = "user@gmail.com";
    echo stristr($email, "@").'</br>';
    echo stristr($email, "@", true).'</br>';
    /*
        strpos - encontra a posicao da primeira ocorrencia numa string.
        Sintaxe:
        int strpos (string $haystack, string $needle [, int $offset] )
    */
    $string = "abc";
    $proc = "a";
    $pos = strpos($string,$proc);
    echo $pos.'</br>';
    /*
    Substr - retorna uma parte da string 
    Sintaxe:
    string substr ( string $string, int $start [,int $length ])
    */
    $substr1 = substr('leonardo',5);
    echo $substr1.'</br>';
    $substr2 = substr('leonardo',1,3);
    echo $substr2.'</br>';
?>