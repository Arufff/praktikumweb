<?php
    require('login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
            body {
                background-color: #162929;
                color: #00ffff;
            }
            table, th, td {
                border-style: solid;
                border-color: #000;
                border-collapse: collapse;
                padding: 8px;
            }
            table {
                width: 100%;
            }
            th {
                background-color: #02fda4;
                color: #000
            }
            button {
                background-color: #02fda4;
                color: #000;
                padding: 8px;
                border: 2px ;
                border-radius: 8px;
                margin-bottom: 8px;
            }
            h1 {
                text-align: center;
            }
            .button {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h1>Form Login</h1>
        <h2><form action = "" method = "post">
            <label for = "no_member">Nomor Member</label>
            <input type = "text" name = "no_member" required> <br>
            <label for = "password">Password</label>
            <input type="text" name="password" required> <br>
            <button type="submit" name="submit">Login</button>
            <button><a href="index.php">Kembali</a></button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $no = trim($_POST['no_member']);
            $pass = trim($_POST['password']);
            cekPassword($no, $pass);
        }
        ?>
    </body>
</html>