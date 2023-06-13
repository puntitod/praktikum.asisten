<!-- File: app/Views/todo/add.php -->
<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
</head>

<body>
    <h1>APLIKASI TO-DOLIST</h1>
    <form method="post" action="<?= base_url('todo/create') ?>">
        <label>Masukkan kegiatan:</label>
        <input type="text" name="kegiatan" required>
        <button type="submit">Tambahkan</button>
    </form>
</body>

</html>