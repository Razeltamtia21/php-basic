<?php 

$nasi = 10000;
$ayam = 38000;
$minyak = 12000;
$cabe = 5000;
$susu = 8000;
$total = $nasi + $ayam + $minyak + $cabe + $susu;

$uang = 80000;

if($uang <= $total){

    $tagihan = $uang - $total;

    echo "uang anda tidak cukup dan anda membutuhkan Rp. $tagihan";
}else {

    $kembalian = $uang - $total;

    echo "uang anda cukup dan kembalian anda Rp. $kembalian";
}


?>