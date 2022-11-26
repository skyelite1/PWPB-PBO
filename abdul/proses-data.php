<?php

include 'DB.php';

$db = new DB();

$data_akun = $db->query("SELECT * FROM akun");

if(isset($_REQUEST['tambah']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $gambar = $_REQUEST ['gambar'];
    $db->query("INSERT INTO akun VALUES ('$id', '$username', '$password','$gambar')");
    header('Location: tampil.php');
}

if(isset($_REQUEST['delete']))
{
    $id = $_REQUEST['delete'];
    $db->query("DELETE FROM akun WHERE id=$id");
    header('Location: tampil.php');
}

if(isset($_REQUEST['update']))
{
    $id = $_GET['id_key'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $gambar = $_REQUEST['gambar'];
    $db->query("UPDATE akun SET username='$username', password='$password', gambar='$gambar' WHERE id=$id");
    header('Location: tampil.php');
}

if(isset($_GET['id_key']))
{
    $id = $_GET['id_key'];
    $data = $db->cariId($id);
}