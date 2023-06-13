<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            color: #fff;
        }

        form {
            width: 300px;
            margin: 0 auto;
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
    <h1>Pendaftaran Asisten Praktikum</h1>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        NIM: <input type="text" name="NIM" /><br />
        NAMA: <input type="text" name="NAMA" /><br />
        PRAKTIKUM: <input type="text" name="PRAKTIKUM" /><br />
        IPK: <input type="text" name="IPK" /><br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>