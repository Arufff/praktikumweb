<?php
    session_name("login");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan Jendela Dunia</title>
        <style>
            <?php
            if(isset($_POST['logout'])){
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['login'])){
                $login = $_SESSION['login'];
                if(isset($login)){
            ?>          #login { 
                        display : none;
                        }
                <?php
                }
            }
            ?>
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
            th {
                background-color: #02fda4;
                color: #000
            }
            h1, h2 {
                text-align: center;
            }
            .button {
                text-align: center;
                background-color: #02fda4;
                color: #000;
                padding: 8px;
                border: 2px ;
                border-radius: 8px;
                margin-bottom: 8px;
            }
        </style>
    </head>
    <body>
        <h1>&#127758;Selamat Datang Di Jendela Dunia&#127759;</h1><br>
        <div class = "button">
            <a href = "formLogin.php"><h2 id = "login">&#128100;Login&#128100;</h2>
            <a href = "buku.php"><h2>&#128218;Buku&#128218;</h2>
            <a href = "peminjaman.php"><h2>&#128221;Peminjaman&#128221;</h2>
            <a href = "member.php"><h2>&#128102;Member&#128103;</h2>
        </div>
        <?php
            if(isset($login)){
            ?>
            <form method='POST'>
            <h1><button type="submit" name="logout">&#9940;Logout&#9940;</button></h1>
            </form>
            <?php
            }
            ?>
    </body>
</html>