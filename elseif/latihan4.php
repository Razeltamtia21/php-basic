<?php 

$nilai = [90, 95, 94, 95];

$hasil = $nilai[0] + $nilai[1] + $nilai[2] + $nilai[3];

$total = $hasil / 4;

if($total <= 100 && $total >= 90){
    echo "Nilai A";
}else if($total <= 89 && $total >= 80){
    echo "Nilai B";
}else if($total <= 79 && $total >= 65){
    echo "Nilai C";
}else if($total <= 64 && $total >= 40){
    echo "Nilai D";
}else if($total <= 39 && $total >= 10){
    echo "Nilai E";
}else if($total <= 9 ){
    echo "anda tidak lulus";
}else {
    echo "Nilai SSS";
}

?>