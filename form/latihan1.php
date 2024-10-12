<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
        }

        form {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            max-width: 400px;
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #00796b;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <form action="latihan2.php" method="post" target="_blank">
        <div class="form-group">
            <h2>Formulir Pendaftaran</h2>
            <input type="text" placeholder="Masukkan Nama" name="nama" required>
            <input type="number" placeholder="Masukkan Umur" name="umur" required>
            <button type="submit" name="tombol-kirim">Kirim</button>
        </div>
    </form>
</body>
</html>
