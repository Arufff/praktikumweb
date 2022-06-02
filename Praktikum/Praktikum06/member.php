<?php
    require('model.php');

    if (isset($_GET['id_member'])) {
        hapusMember($_GET['id_member']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Member</title>
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
        <h1>"Daftar Member"</h1>
        <div class="button">
            <button><a href="formMember.php">Tambah Data Member</a></button>
            <button><a href="index.php">Kembali Ke Halaman Utama</a></button>
        </div>
        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Daftar</th>
                <th>Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <?php 
                tampilMember();
            ?> 
        </table>
    </body>   
</html>