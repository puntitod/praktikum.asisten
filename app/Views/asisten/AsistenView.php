<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    h1 {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: #fff;
        margin: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th,
    table td {
        border: 1px solid #333;
        padding: 10px;
    }

    table th {
        background-color: #333;
        color: #fff;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<head>
    <title>Daftar Asisten</title>
</head>

<body>
    <h1>Pendaftaran Asisten Praktikum</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PRAKTIKUM</th>
            <th>IPK</th>
        </tr>
        <?php foreach ($asisten as $row): ?>
            <tr>
                <td>
                    <?= $row['NIM']; ?>
                </td>
                <td>
                    <?= $row['NAMA']; ?>
                </td>
                <td>
                    <?= $row['PRAKTIKUM']; ?>
                </td>
                <td>
                    <?= $row['IPK']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>

<?= $this->endSection(); ?>