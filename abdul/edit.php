<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            background: gray;
            font-family: 'Roboto';
            font-size: 20px;
        }

        h1 {
            text-align: center;
        }

        table{
            border: 1px solid burlywood;
            background: wheat;
            margin: auto;
            padding: 10px;
        }
        
    </style>
</head>
<body>
<?php
                $koneksi = new PDO("mysql:host=localhost;dbname=abdul;",'root','');
                $id = $_GET["id"];
                        
                $query = $koneksi->query("select * from akun where id='$id'");
                $data = $query->fetchAll();
        
                foreach ($data as $data) {
    ?>
    <h1 style="margin-left: 70px;">Edit</h1>
    <table>
        <form method="get" action="proses-edit.php">
        <tr>
                <td>
                    <label for="id"></label>
                </td>
                <td><input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>"/></td>
            </tr>
            <tr>
                <td>
                    <label for="username">Username :</label>
                </td>
                <td><input type="text" id="username" name="username" value="<?php echo $data['username'] ?>" /></td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td><input type="password" id="password" name="password" value="<?php echo $data['password'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan""></td>
            </tr>
        </form>
    </table>
        <?php } ?>
</body>
</html>