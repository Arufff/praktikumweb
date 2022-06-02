<?php 
    session_name("login");
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location: errorPage.php');
    }

    require('model.php');

    if (isset($_GET['id_buku'])) {
        editBuku();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
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
        <h1>Form Buku</h1>
        <h2><form action = "" method = "post">
            <label for = "id_buku">Id</label>
            <input type = "text" name = "id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $hasil[0]["id_buku"] . "" : "value = '' "; ?> required> <br>
            <label for = "judul">Judul Buku</label>
            <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $hasil[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
            <label for = "penulis">Penulis</label>
            <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $hasil[0]["penulis"] . "" : "value = '' "; ?> required> <br>
            <label for = "penerbit">Penerbit</label>
            <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $hasil[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
            <label for = "id_buku">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $hasil[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
            <?php 
                if (isset($_GET['id_buku'])) {
            ?>
                    <button type="submit" name="update">Update</button>
                    <button><a href="buku.php">Kembali</a></button>
                <?php
                }else {
                ?>
                    <button type="submit" name="submit">Tambah</button>
                    <button><a href="buku.php">Kembali</a></button>
                <?php   
                }
            ?>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            tambahBuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
        }
        if (isset($_POST['update'])) {
            updateBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['tahun_terbit']);
        }
        ?>
    </body>
</html>