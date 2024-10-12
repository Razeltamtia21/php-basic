<?php
// Array data siswa
$siswa = [
    ['nama' => 'Andi', 'kelas' => '11 RPL', 'nilai' => 80],
    ['nama' => 'Budi', 'kelas' => '11 RPL', 'nilai' => 65],
    ['nama' => 'Citra', 'kelas' => '11 RPL', 'nilai' => 90]
];

// Fungsi untuk menampilkan tabel data siswa
function tampilkanSiswa($siswa) {
    echo "<table border='1'>";
    echo "<tr><th>No</th><th>Nama</th><th>Kelas</th><th>Nilai</th><th>Keterangan</th></tr>";
    
    $no = 1;
    foreach ($siswa as $data) {
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
    echo "</table>";
}

// Menampilkan data siswa
tampilkanSiswa($siswa);
?>
