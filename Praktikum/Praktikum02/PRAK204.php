<form method = "POST">
    <div>
        <label for = "">Nilai:</label>
        <input type = "text" name = "nilai" required>
    </div>
    <button type="submit">Konversi</button>
</form>

<?php
    $nilai = NULL;
    $pesan = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nilai"])) {
            $nilai = $_POST["nilai"];
        }

        if ($nilai > 0 && $nilai < 10) {
            $pesan = "Satuan";
        }

        if ($nilai == 0) {
            $pesan = "Nol";
        }

        if ($nilai > 10 && $nilai < 20) {
            $pesan = "Belasan";
        }

        if ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            $pesan = "Puluhan";
        }

        if ($nilai >= 100 && $nilai <= 999) {
            $pesan = "Ratusan";
        }

        if ($nilai < 0) {
            $pesan = "Anda Menginput Kurang dari Limit Bilangan";
        }

        if ($nilai > 999) {
            $pesan = "Anda Menginput Melebihi Limit Bilangan";
        }

        echo "<h2>Hasil : $pesan";
    }
?>