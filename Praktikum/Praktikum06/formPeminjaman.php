<?php 
    session_name("login");
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location: errorPage.php');
    }

    require('model.php');

    if (isset($_GET['id_peminjaman'])) {
        editPeminjaman();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Peminjaman</title>": "<title>Tambah Peminjaman</title>" ?> 
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
        <h1>Form Peminjaman</h1>
        <h2><form action = "" method = "post">
            <label for = "id_peminjaman">Id</label>
            <input type = "text" name = "id_peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $hasil[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br>
            <label for = "tgl_pinjam">Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $hasil[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
            <label for = "tgl_kembali">Tanggal Pengembalian</label>
            <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $hasil[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
            <?php 
                if (isset($_GET['id_peminjaman'])) {
            ?>
                    <button type="submit" name="update">Update</button>
                    <button><a href="peminjaman.php">Kembali</a></button>
                <?php
                }else {
                ?>
                    <button type="submit" name="submit">Tambah</button>
                    <button><a href="peminjaman.php">Kembali</a></button>
                <?php   
                }
            ?>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            tambahPeminjaman($_POST['id_peminjaman'],$_POST['tgl_pinjam'], $_POST['tgl_kembali']);
        }
        if (isset($_POST['update'])) {
            updatePeminjaman($_GET['id_peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
        }
        ?>
    </body>
</html>