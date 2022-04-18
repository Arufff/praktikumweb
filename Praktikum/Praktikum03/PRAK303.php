<form method = "POST">
    <div>
        <label for = "">Batas Bawah :</label>
        <input type = "text" name = "bwh">
    </div>
    <div>
        <label for = "">Batas Atas :</label>
        <input type = "text" name = "ats">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $bwh = NULL;
    $ats = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["bwh"])) {
            $bwh = $_POST["bwh"];
        }
        if (isset($_POST["ats"])) {
            $ats = $_POST["ats"];
        }
    }    

    do {
        if ($bwh > $ats ) {
            echo "<h3>Batas bawah tidak boleh lebih besar dari batas atas!!!";
        }
        else {
            $cek = $bwh + 7;
            if ($cek % 5 == 0) {
                echo "<img src =star.png style = width:20px height:20px>";
            }
            else {
                echo "$bwh ";
            }
        }
        $bwh++;
    } while ($bwh <= $ats);
?>