<?php 

    $hadir_kerja = 31;
    $gaji_pokok = 100000;
    $gaji_tambahan = 50000; //hadir 25hari
    $gaji_penurunan = 50000; // hadir dibawah 20hari
    $bonus_gaji = 50000; //hadir dalam full kerja

    if($hadir_kerja <= 30 && $hadir_kerja >= 25){

        $gaji = $gaji_pokok + $gaji_tambahan;
        echo "Gaji anda: Rp. $gaji";
    }else if($hadir_kerja <= 32 && $hadir_kerja >= 31){
        $gaji = $gaji_pokok + $gaji_tambahan + $bonus_gaji;
        echo "Gaji anda: Rp. $gaji";
    }else if($hadir_kerja <= 19 && $hadir_kerja >= 1){
        $gaji = $gaji_pokok - $gaji_penurunan;
        echo "Gaji anda: Rp. $gaji";
    }else {
        echo "Gaji anda: Rp. $gaji_pokok";
    }
?>
