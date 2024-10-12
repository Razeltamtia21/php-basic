<?php 

$jadwal_pelajar = [
    "Senin" => [
        "B.Indonesia",
        "Matematika",
        "Pendidikan Agama Islam",
        "Rekayasan Perangkat Lunak"
    ],
    "Selasa" => [
        "B. Inggris",
        "Proyek Kreatif Kewirausahan",
        "Projek Profil Pancasila"
    ],
    "Rabu" => [
        "PLKJ",
        "Pendidikan Pancasila",
        "Rekayasan Perangkat Lunak"
    ],
    "Kamis" => [
        "Proyek Kreatif Kewirausahan",
        "Jasmani Olahraga Kebugaran",
        "Sejarah",
        "Kimia"
    ],
    "Jumat" => [
        "Rekayasan Perangkat Lunak"
    ]
];

echo "<style>

    .php {
    margin: 10px 0;
    width: 400px;

}

    .php tr th {
    color: white;
    background-color: blue;
}

    .php tr td{
    text-align: center;
}

</style>";

echo "<div class = 'php'>";
echo "<table border = 1>";
echo "<tr><th>No</th><th>Senin</th><tr>";

$no = 1;
foreach ($jadwal_pelajar["Senin"] as $senin){
    echo "<tr><td>$no</td><td>$senin</td></tr>";
    $no++;
}
echo "<tr><th>No</th><th>Selasa</th><tr>";

$no = 1;
foreach ($jadwal_pelajar["Selasa"] as $selasa){
    echo "<tr><td>$no</td><td>$selasa</td></tr>";
    $no++;
}
echo "<tr><th>No</th><th>Rabu</th><tr>";

$no = 1;
foreach ($jadwal_pelajar["Rabu"] as $rabu){
    echo "<tr><td>$no</td><td>$rabu</td></tr>";
    $no++;
}
echo "<tr><th>No</th><th>Kamis</th><tr>";

$no = 1;
foreach ($jadwal_pelajar["Kamis"] as $kamis){
    echo "<tr><td>$no</td><td>$kamis</td></tr>";
    $no++;
}
echo "<tr><th>No</th><th>Jumat</th><tr>";

$no = 1;
foreach ($jadwal_pelajar["Jumat"] as $jumat){
    echo "<tr><td>$no</td><td>$jumat</td></tr>";
    $no++;
}
echo "</table>";
echo "</div>";
?>