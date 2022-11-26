<?php
    include 'proses-data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List akun</title>
</head>
<body>
    <a href="tambah.php">Tambah akun</a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>gambar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data_akun as $akun) : ?>
        <tr>
            <td><?= $akun['id'] ?>
            <td><?= $akun['username']?></td>
            <td><?= $akun['password']?></td>
            <td><img src="<?= $akun['gambar']?>" alt="" width="250px"></td>
            <td>
                <form action="" method="post">
                    <button name="delete" value="<?= $akun['id']?>">
                        HAPUS
                    </button>
                </form>

                <form action="edit.php" method="get">
                    <button name="id_key" value="<?= $akun['id']?>">EDIT</button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>