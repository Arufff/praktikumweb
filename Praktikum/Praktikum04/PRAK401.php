<style>
    table, tr, td {
        text-align : center;
        border : 1px solid;
        border-collapse : collapse;
        padding : 7px;
    }
</style>

<form method = "POST">
    <div>
        <label for = "">Panjang :</label>
        <input type = "text" name = "panjang">
    </div>
    <div>
        <label for = "">Lebar :</label>
        <input type = "text" name = "lebar">
    </div>
    <div>
        <label for = "">Nilai :</label>
        <input type = "text" name = "nilai">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["panjang"])) {
            $panjang = $_POST["panjang"];
        }
        if (isset($_POST["lebar"])) {
            $lebar = $_POST["lebar"];
        }
        if (isset($_POST["nilai"])) {
            $nilai = $_POST["nilai"];
        }

        $array = explode(" ", $nilai);
        $pArray = sizeof($array);
        $luas = $panjang * $lebar;

        if ($pArray > $luas || $pArray < $luas) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
        else { ?>
            <table>
            <?php
            $isi = 0;
            for ($i=0; $i < $panjang; $i++) { 
                ?>
                <tr>
                <?php 
                for ($j=0; $j < $lebar; $j++) { 
                    ?>
                    <td>
                    <?php
                    echo $array[$isi]; ?>
                    </td>
                    <?php
                    $isi++;
                } ?>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }
    }
?>