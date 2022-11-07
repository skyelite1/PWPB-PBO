<?php
    $id       = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];

     $koneksi = new PDO("mysql:host=localhost;dbname=abdul;",'root','');

     $koneksi->query("update akun set username='$username', password='$password' where id='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses edit</title>
</head>
<body>
    <button><a href="http://localhost/abdul/tampilkan-data.php">back</a></button>
</body>
</html>