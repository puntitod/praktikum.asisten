<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Data Asisten</title>

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
</head>

<body>
    <h1>Silahkan Update Data Asisten Praktikum</h1>
    <form action="/asisten/update" method="post">
        <?= csrf_field(); ?>
        <label for="NIM">NIM:</label>
        <input type="text" name="NIM" id="NIM" required>
        <br>
        <label for="NAMA">Nama:</label>
        <input type="text" name="NAMA" id="NAMA" required>
        <br>
        <label for="PRAKTIKUM">Praktikum:</label>
        <input type="text" name="PRAKTIKUM" id="PRAKTIKUM" required>
        <br>
        <label for="IPK">IPK:</label>
        <input type="text" name="IPK" id="IPK" required>
        <br>
        <input type="submit" value="Update">
    </form>
</body>

</html>