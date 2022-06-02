<?php 
    session_name("login");
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location: errorPage.php');
    }

    require('model.php');

    if (isset($_GET['id_member'])) {
        editMember();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
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
        <h1>Form Member</h1>
        <h2><form action = "" method = "post">
            <label for = "id_member">Id</label>
            <input type = "text" name = "id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["id_member"] . "" : "value = '' "; ?> required> <br>
            <label for = "nama_member">Nama</label>
            <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["nama_member"] . "" : "value = '' "; ?> required> <br>
            <label for = "no_member">Nomor Member</label>
            <input type="text" name="no_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["no_member"] . "" : "value = '' "; ?> required> <br>
            <label for = "alamat">Alamat</label>
            <input type = "text" name = "alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["alamat"] . "" : "value = '' "; ?> required> <br>
            <label for = "tgl_mendaftar">Tanggal Mendaftar</label>
            <input type="datetime-local" name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br>
            <label for = "tgl_terakhir_bayar">Tanggal Terakhir Bayar</label>
            <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $hasil[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br>
            <?php 
                if (isset($_GET['id_member'])) {
            ?>
                    <button type="submit" name="update">Update</button>
                    <button><a href="member.php">Kembali</a></button>
                <?php
                }else {
                ?>
                    <button type="submit" name="submit">Tambah</button>
                    <button><a href="member.php">Kembali</a></button>
                <?php   
                }
            ?>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            tambahMember($_POST['id_member'],$_POST['nama_member'], $_POST['no_member'], $_POST['alamat'],$_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        }
        if (isset($_POST['update'])) {
            updateMember($_POST['id_member'],$_POST['nama_member'], $_POST['no_member'], $_POST['alamat'],$_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        }
        ?>
    </body>
</html>