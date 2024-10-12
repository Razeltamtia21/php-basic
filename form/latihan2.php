<?php 
session_start(); // Mulai session

echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        margin: 0;
        padding: 0;
    }

    table {
        width: 60%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #00796b;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .reset-button {
        display: block;
        width: 200px;
        margin: 20px auto;
        padding: 10px;
        text-align: center;
        background-color: #d32f2f;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .reset-button:hover {
        background-color: #c62828;
    }
</style>";

// Jika tombol kirim ditekan
if(isset($_POST["tombol-kirim"])){
    $name = $_POST["nama"];
    $age = $_POST["umur"];

    if($name && $age){
        // Tambahkan data ke dalam session
        $_SESSION['data'][] = array("nama" => $name, "umur" => $age);
    }
}
?>

<?php 

// Cek apakah session 'data' sudah ada
if(isset($_SESSION['data']) && !empty($_SESSION['data'])) {
    echo "
    <table border='1'>
        <tr><th>No</th><th>Nama</th><th>Umur</th></tr>
    ";

    // Loop melalui data yang disimpan di session dan tampilkan dalam tabel
    $no = 1;
    foreach($_SESSION['data'] as $row) {
        echo "<tr><td>$no</td><td>{$row['nama']}</td><td>{$row['umur']}</td></tr>";
        $no++; // Nomor urut bertambah
    }
    echo "</table>";
}

?>

<form action="latihan2.php" method="post">
    <button type="submit" name="reset" class="reset-button">Reset Data</button>
</form>

<?php
// Reset session jika tombol 'reset' ditekan
if(isset($_POST['reset'])){
    unset($_SESSION['data']);
    header("Location: latihan2.php"); // Reload halaman untuk menghapus tabel
}
?>
