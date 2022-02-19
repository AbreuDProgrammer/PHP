<?php
$baseAlphaChars = range('A', 'Z');

$num = 45697599;
$pattern = array(26, 26, 10, 10, 26, 26); // AA00AA type of plate (example BB-40-GZ)

function genBaseSys($arr) {
    $newarr = array();
    for($i = count($arr) - 1; $i >= 0; $i--) {
        $r = 1;
        for($j = $i; $j < count($arr); $j++) if($j != count($arr)-1) $r *= $arr[$j+1];
        $newarr[] = $r;
    }
    return $newarr;
}

$strMatricula = "";
function genRawNumBase($n ,$sys) {
    $plate = array();
    for($i = count($sys) - 1; $i >= 0; $i--) {
        $plate[] = floor($n/$sys[$i]);
        $n %= $sys[$i];
    }
    return $plate;
}

$numGen = genRawNumBase($num, genBaseSys($pattern));

foreach($numGen as $i => $val) {
    switch($pattern[$i]) {
        case 10: $strMatricula .= $val; break;
        case 26: $strMatricula .= $baseAlphaChars[$val]; break; // To use our base 26 from A-Z
        default:
            if($pattern[$i] > 1 && $pattern[$i] <= 36) $strMatricula .= base_convert($val, 10, $pattern[$i]);
    }
}

function calcMax($typePlate) {
    $r = 1;
    for ($i = 0; $i < count($typePlate); $i++) 
        $r *= $typePlate[$i];
    return --$r;
}

echo calcMax($pattern)."\n";
echo $strMatricula;
?>
