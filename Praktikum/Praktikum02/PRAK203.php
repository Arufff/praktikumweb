<form method = "POST">
    <div>
        <label for = "">Nilai:</label>
        <input type = "text" name = "nilai" required>
    </div>
    <div>
        <label for = "">Dari:</label><br/>
        <input type="radio" name="suhu1" value="C1">Celcius<br/>
        <input type="radio" name="suhu1" value="F1">Fahrenheit<br/>
        <input type="radio" name="suhu1" value="Re1">Reamur<br/>
        <input type="radio" name="suhu1" value="K1">Kelvin<br/>
    </div>
    <label for = "">Ke:</label><br/>
        <input type="radio" name="suhu2" value="C2">Celcius<br/>
        <input type="radio" name="suhu2" value="F2">Fahrenheit<br/>
        <input type="radio" name="suhu2" value="Re2">Reamur<br/>
        <input type="radio" name="suhu2" value="K2">Kelvin<br/>
    <button type="submit">Konversi</button>
</form>

<?php
    $nilai = NULL;
    $hasil = NULL;
    $suhu1 = "";
    $suhu2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nilai"])) {
            $nilai = $_POST["nilai"];
        }

        if (isset($_POST["suhu1"])){
            $suhu1 = $_POST["suhu1"];
        }

        if (isset($_POST["suhu2"])){
            $suhu2 = $_POST["suhu2"];
        }

        if ($suhu1 == "C1" and $suhu2 == "F2") {
            $hasil = (9 / 5 * $nilai) + 32;
            echo "<h2>Hasil Konversi = $hasil °F";  
        }

        if ($suhu1 == "C1" and $suhu2 == "Re2") {
            $hasil = 4 / 5 * $nilai;
            echo "<h2>Hasil Konversi = $hasil °Re";
        }

        if ($suhu1 == "C1" and $suhu2 == "K2") {
            $hasil = $nilai + 273;
            echo "<h2>Hasil Konversi = $hasil °K";
        }

        if ($suhu1 == "F1" and $suhu2 == "C2") {
            $hasil = (5 / 9) * ($nilai + 32);
            echo "<h2>Hasil Konversi = $hasil °C";
        }

        if ($suhu1 == "F1" and $suhu2 == "Re2") {
            $hasil = (4 / 9) * ($nilai + 32);
            echo "<h2>Hasil Konversi = $hasil °Re";
        }

        if ($suhu1 == "Re1" and $suhu2 == "C2") {
            $hasil = 5 / 4 * $nilai;
            echo "<h2>Hasil Konversi = $hasil °C";
        }

        if ($suhu1 == "Re1" and $suhu2 == "F2") {
            $hasil = (9 / 4 * $nilai) + 32;
            echo "<h2>Hasil Konversi = $hasil °F";
        }

        if ($suhu1 == "Re1" and $suhu2 == "K2") {
            $hasil = (5 / 4 * $nilai) + 273;
            echo "<h2>Hasil Konversi = $hasil °K";
        }

        if ($suhu1 == "K1" and $suhu2 == "C2") {
            $hasil = $nilai - 273;
            echo "<h2>Hasil Konversi = $hasil °C";
        }

        if ($suhu1 == "Re1" and $suhu2 == "F2") {
            $hasil = 4 / 5 * ($nilai + 273);
            echo "<h2>Hasil Konversi = $hasil °F</h2>";
        }    
    }
?>