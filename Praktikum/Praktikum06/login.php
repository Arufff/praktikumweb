<?php
    session_name("login");
    session_start();
    if(isset($_SESSION['login'])){
        header("location: index.php");
        exit;
    }

    require('koneksi.php');

    function cekPassword($no, $pass)
    {
        $stmt = koneksi() -> prepare("SELECT * FROM member WHERE no_member = '$no' AND password = '$pass'");
        $stmt -> execute();
        $hasil = $stmt -> fetchAll();

        if (!empty($hasil)) {
            $_SESSION['login'] = true;
            header('location: index.php');
        }
        else {
            echo "Username dan Password tidak cocok!!!";
        }
    }
?>