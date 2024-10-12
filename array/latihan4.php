<?php 

$database = [
    "frontend" => [
        "html",
        "css",
        "js"
    ],
    "backend" => [
        "java",
        "php",
        "c#"
    ]
];

echo "<h2>Frontend</h2>";
foreach ($database["frontend"] as $frontend){
    echo "<ul><li>";
    echo $frontend;
    echo "</li></ul>";
}


echo "<h2>Backend</h2>";
foreach ($database["backend"] as $backend){
    echo "<ul class = 'list'><li>";
    echo $backend;
    echo "</li></ul>";
}


echo "<style>

    .list li {
    list-style-type: square;
}

</style>";
?>