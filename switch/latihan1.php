<?php 

$nilai1 = 20;
$nilai2 = 5;

$pilihan = 1;

switch($pilihan){
    case 1:
        $pertambahan = $nilai1 + $nilai2;
        echo "pertambahan $nilai1 + $nilai2 = $pertambahan";
    break;
    case 2:
        $pengurangan = $nilai1 - $nilai2;
        echo "pengurangan $nilai1 - $nilai2 = $pengurangan";
    break;
    case 3:
        $perkalian = $nilai1 * $nilai2;
        echo "perkalian $nilai1 x $nilai2 = $perkalian";
    break;
    case 4:
        $pembagian = $nilai1 / $nilai2;
        echo "pembagian $nilai1 / $nilai2 = $pembagian";
    break;
    
    default:
    echo "pilihan tidak sesuai...";
}

?>