<?php

$ip =  $_POST['IP'];
$mascara = $_POST['mascara'];

function calcula($ip, $mascara){

    //echo $ip;
    //echo $mascara;



    switch ($mascara){

        case $mascara == 24:
            $decimal = 000;
            break;

        case $mascara == 25:
            $decimal = 128;
            break;

        case $mascara == 26:
            $decimal = 192;
            break;

        case $mascara == 27:
            $decimal = 224;
            break;

        case $mascara == 28:
            $decimal = 240;
            break;

        case $mascara == 29:
            $decimal = 248;
            break;

        case $mascara == 30:
            $decimal = 252;
            break;

        case $mascara == 31:
            $decimal = 254;
            break;

    }


    return $decimal;
}

$decimal = calcula($ip,$mascara);



$exe2 = 256 - $decimal;

$exe = 256 / $exe2;

$ex3 = $exe2 - 2;

$partes = explode(".", $ip);

for ($i = 0; $i <= $exe; $i++) {
    $x[] = $exe2 * $i;
}

for ($i = 0; $i <= $exe; $i++) {
    $z = $i + 1;
    if($partes['3'] > $x[$i] AND $partes['3'] < $x[$z]){
        $exe4 = $x[$i] + 1;
        $exe5 = $x[$z] - 2;
        $exe6 = $x[$z] - 1;
    }
}
$exe7 = "255.255.255.". $decimal ;

echo "$exe, $exe2, $ex3, $exe4, $exe5, $exe6, $exe7, C , faltou privado ou publico";