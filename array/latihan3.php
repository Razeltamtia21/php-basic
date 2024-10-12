<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .php {
            width: 50px;
            margin: 0 10px;
            float: left;
            height: 50px;
            color: black;
            line-height: 50px;
            text-align: center;
            border: 1px solid red;
            transition-duration: 0,5s ease;
        }

        .php:hover {
            color: white;
            cursor: pointer;
            font-weight: 800;
            background-color: red;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
        <?php 
        
        $nilai = [2, 3, 4, 6, 6, 2, 1, 3];

        for($i = 0; $i < count($nilai); $i++){
            echo "<div class='php'>$nilai[$i]</div>";
        }
        
        ?>
</body>
</html>