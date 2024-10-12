<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .php table {
            width: 400px;
            text-align: center;
        }

        .php table th {
            color: white;
            background-color: blue;
        }

    </style>
</head>
<body>
    <div class="php">
        <table border="1">
            <?php 
            $data = ["Gerald Jerome Marshall", "Andi Ahmad Fariza", "Muhammad Athalla Radiansyah"];
            echo "<tr><th>No</th><th>Nama</th></tr>";
            $no = 1;
            foreach($data as $rpl){
                echo "<tr><td>$no</td><td>$rpl</td></tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</body>
</html>