<?php
// Memulai session
session_start();

// Cek apakah array siswa sudah ada di session, jika belum buat array kosong
if (!isset($_SESSION['siswa'])) {
    $_SESSION['siswa'] = [];
}

// Menangani input form
if (isset($_POST["tombol-kirim"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nilai = $_POST["nilai"];

    // Tambahkan data siswa ke dalam array session
    $_SESSION['siswa'][] = [
        "nama" => $nama,
        "kelas" => $kelas,
        "nilai" => $nilai
    ];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Nama" name="nama" required>
        <input type="text" placeholder="Kelas" name="kelas" required>
        <input type="number" placeholder="Nilai" name="nilai" required>
        <button type="submit" name="tombol-kirim">Kirim</button>
    </form>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Keterangan</th>
        </tr>
        <?php
        if (!empty($_SESSION['siswa'])) {
            $no = 1;
            foreach ($_SESSION['siswa'] as $data) {
                $keterangan = ($data['nilai'] >= 75) ? 'Lulus' : 'Remedial';
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$data['nama']}</td>
                        <td>{$data['kelas']}</td>
                        <td>{$data['nilai']}</td>
                        <td>{$keterangan}</td>
                      </tr>";
                $no++;
            }
        }
        ?>
    </table>

    <form action="" method="post">
        <button type="submit" name="reset">Reset Data</button>
    </form>

    <?php
    // Menangani tombol reset untuk menghapus semua data siswa
    if (isset($_POST['reset'])) {
        // Menghapus data dari session
        $_SESSION['siswa'] = [];
        // Refresh halaman agar tabel kosong setelah reset
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>
</html>
