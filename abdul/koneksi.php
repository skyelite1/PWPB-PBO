<?php
//PDO
    $koneksi = new PDO("mysql:host=localhost;dbname=abdul;",'root','');
//query
//memasukan data
    //$koneksi->query("INSERT INTO `data`(`id`, `username`, `password`) VALUES ('2','admin2','admin')");
//mengedit / update data
    //$koneksi->query("UPDATE `data` SET `id`='3',`username`='admin3',`password`='admin' WHERE id='2'");
//menampilkan data
    //$query = $koneksi->query("SELECT * FROM data");
//menghapus data
    //$koneksi->query("DELETE FROM `data` WHERE id='3'");

    //ambil / masukan data ke variabel
    $data = $query->fetchAll();
    // var_dump($data);

    foreach ($data as $data) {
        echo $data['username'], "<br />";
    }
?>  