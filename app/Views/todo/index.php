<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI TO-DOLIST</title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>

<body>
    <h1>APLIKASI TO-DOLIST</h1>
    <form method="post" action="<?= base_url('todolist/addTask') ?>">
        <label>Masukkan kegiatan:</label>
        <input type="text" name="kegiatan" required>
        <button type="submit">Tambahkan</button>
    </form>
    <br>
    <h3>Daftar Kegiatan:</h3>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kegiatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($todolist as $task) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $task['kegiatan'] ?></td>
                    <td>
                        <a href="<?= base_url('todolist/markAsDone/' . $task['idkegiatan']) ?>">Selesai</a>
                        <a href="<?= base_url('todolist/deleteTask/' . $task['idkegiatan']) ?>">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>