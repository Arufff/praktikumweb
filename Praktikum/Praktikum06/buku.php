<?php
    require('model.php');

    if (isset($_GET['id_buku'])) {
        hapusBuku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Buku</title>
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
            h1, h2 {
                text-align: center;
            }
            .button {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h1>"Daftar Buku"</h1>
        <div class="button">
            <button><a href="formBuku.php">Tambah Data Buku</a></button>
            <button><a href="index.php">Kembali Ke Halaman Utama</a></button>
        </div>
        <table>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php 
                tampilBuku();
            ?> 
        </table>
    </body>   
</html>