<?php 

$nama = "razel";
$umur = 21;

if($umur <= 10 && $umur >= 1){
    echo "$nama sebgai anak-anak";
}else if($umur <= 17 && $umur >= 11){
    echo "$nama sebagai remaja";
}else if($umur <= 32 && $umur >= 18){
    echo "$nama sebagai dewasa";
}else {
    echo $umur ." belum lahir";
}

?>