<form method = "POST">
    <div>
        <label for = "">Tinggi :</label>
        <input type = "text" name = "tng">
    </div>
    <div>
        <label for = "">Alamat Gambar :</label>
        <input type = "text" name = "img">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $tng = NULL;
    $img = "";
    $i = 1;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["tng"])) {
            $tng = $_POST["tng"];
        }
        if (isset($_POST["img"])) {
            $img = $_POST["img"];
        }
    }    

    while ($i <= $tng) {
        $j = 1;
        $c = $tng;

        while ($j <= $i) {
            echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
            $j++;
        }
        while ($i <= $c) {
            echo "<img src = $img style = width:20px height:20px>";
            $c--;
        }
        echo "<br>";
        $i++;
    }

?>