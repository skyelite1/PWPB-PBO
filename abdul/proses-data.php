<?php
    $id = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];

     $koneksi = new PDO("mysql:host=localhost;dbname=abdul;",'root','');

     $koneksi->query("INSERT INTO `akun`(`id`, `username`, `password`) VALUES ('$id','$username','$password')");
?>