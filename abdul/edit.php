<?php
    include 'proses-data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" value="<?= $data[0]['id']?>" id="" placeholder="id"> <br>
        <input type="text" name="username" value="<?= $data[0]['username']?>" id="" placeholder="username"> <br>
        <input type="password" name="password" placeholder="password" value="<?= $data[0]['password']?>"> <br>
        <input type="text" name="gambar" value="<?= $data[0]['gambar']?>" placeholder="tautan gambar"> <br>
        <button name="update" type="submit">EDIT</button>
    </form>
</body>
</html>