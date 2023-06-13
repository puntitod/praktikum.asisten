<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: #000;
        color: #fff;
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
        color: #fff;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #fff;
    }

    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #333;
        color: #fff;
        border: none;
    }

    input[type="submit"] {
        background-color: #555;
        cursor: pointer;
    }
</style>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Asisten</title>
</head>

<body>
    <h1>Silahkan Mencari Data Asisten Praktikum</h1>
    <form action="search" method="post">
        <?= csrf_field() ?>
        Cari Dengan Masukkan NIM : <input type="text" name="key" /><br />
        <input type="submit" name="submit" value="Search" />
    </form>

    <?php
    if (!empty($hasil)) {
        echo "<h1> Hasil Pencarian </h1>";
        echo "Nama: " . $hasil['NAMA'] . "<br>";
        echo "Praktikum: " . $hasil['PRAKTIKUM'] . "<br>";
        echo "IPK: " . $hasil['IPK'] . "<br>";
    }
    ?>
    
</body>
</html>