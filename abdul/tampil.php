<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan data</title>
</head>
<body>
    Data Siswa

    <?php
        $koneksi = new PDO("mysql:host=localhost;dbname=abdul;",'root','');
        $id = $_GET["id"];
        
        echo "$id";

        $query = $koneksi->query("select * from akun where id='$id'");
        $data = $query->fetchAll();

        foreach ($data as $data) {
            echo "<p>" ,$data['username'], "</p>";
        }
    ?>
    <button><a href="http://localhost/abdul/tampilkan-data.php">Back</a></button>
</body>
</html>