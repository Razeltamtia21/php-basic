<?php 

echo "<style>
table, nav {
    width: 20%;
    margin: 0 auto;
}
</style>";

$family = array (
    "Naruto" => array (
        "Uzumaki Boruto ",
        "Uzumaki Himawari "
    ),
    "Sasuke" => array (
        "Uchiha Sarada"
    ),
    "Kakashi" => array (
        "Uzumaki Naruto",
        "Uchiha Sasuke",
        "Sakura Haruno"
    )
);

echo "<table border='1'>";
echo "<tr><th>Keluarga Naruto</th></tr>";

foreach ($family["Naruto"] as $naruto ){
    echo "<tr><td>". $naruto ."</td></tr>";
}

echo "</table>";

echo "<nav>";
echo "<h2>Keluarga Sasuke</h2>";

foreach ($family["Sasuke"] as $sasuke){
    echo "<ul><li>". $sasuke ."</li></ul>";
}

echo "</nav>";

echo "<style>
.border-judul th {
    color: white;
    background-color: blue;
}

.number {
text-align: center;
background-color: yellow;
}
</style>";

echo "<table border='1' class='border-judul'>";
echo "<tr><th>No</th><th>Kelompok Kakashi</th></tr>";

$number = 1;
foreach ($family["Kakashi"] as $kakashi) {
    echo "<tr><td class = 'number'>". $number ."</td><td>". $kakashi ."</td></tr>";
    $number++;
}

echo "</table>";
?>
