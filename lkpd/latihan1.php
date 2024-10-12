<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="latihan1.php" method="post">
    <label >Masukkan Jam Kerja anda:</label>
        <input type="text" name="jam-kerja" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
    <button type="submit" name="tombol-kirim">Kirim</button>
    <div class="php">
        <?php 
        
        if(isset($_POST["tombol-kirim"])){
            $jam_kerja = $_POST["jam-kerja"];
            $gaji_pokok = 100000;
            $bonus_jam_lempur = 50000;
            $jam_lembur = 160;
            if($jam_kerja > $jam_lembur){
                $bonus_kerja_lembur = $jam_kerja - $jam_lembur;
                $total_gaji = $bonus_kerja_lembur * $bonus_jam_lempur + $gaji_pokok; 
                echo $total_gaji;
            }else {
                echo $gaji_pokok;
            }
        }
        
        ?>
    </div>
</form>
</body>
</html>