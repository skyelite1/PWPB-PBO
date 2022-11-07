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
    <h1 style="margin-left: 70px;">Register</h1>
    <table>
        <form method="get" action="proses-data.php">
            <tr>
                <td>
                    <label for="id">ID :</label>
                </td>
                <td><input type="number" id="id" name="id" /></td>
            </tr>   
            <tr>
                <td>
                    <label for="username">Username :</label>
                </td>
                <td><input type="text" id="username" name="username" /></td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan""></td>
            </tr>
        </form>
    </table>
</body>
</html>