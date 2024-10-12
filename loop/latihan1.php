<?php 

echo "Bilangan Ganjil: ";
for($i = 1; $i <= 30; $i++ ){
    if($i % 2 != 0){
        echo $i ." ";
    }
}

echo "<br>Bilangan Genap: ";
for($i = 1; $i <= 30; $i++ ){
    if($i % 2 == 0){
        echo $i ." ";
    }
}

?>