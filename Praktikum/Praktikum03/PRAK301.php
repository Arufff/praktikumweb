<form method = "POST">
    <div>
        <label for = "">Jumlah Peserta :</label>
        <input type = "text" name = "peserta">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $i = 1;
    $peserta = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["peserta"])) {
            $peserta = $_POST["peserta"];
        }
    }    

    while ($i <= $peserta) {
        if ($i % 2 == 0) {
            echo "<h2 style = color:green>Peserta ke-$i</h2>";
        }
        else {
            echo "<h2 style = color:red>Peserta ke-$i</h2>";
        }
        $i++;
    }
?>