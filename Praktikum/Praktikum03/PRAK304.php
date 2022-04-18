<?php
    $img = "<img src = 'star.png' style = width:50px height:50px>";
    $bintang = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bintang = (int)$_POST["bintang"];
    }

    if (isset($_POST["tambah"])) {
        $bintang += 1;
    }

    if (isset($_POST["kurang"])) {
        $bintang -= 1;
    }

    if (empty($bintang)) { ?>
        <form action = "" method = "POST">
            Jumlah Bintang: <input type = "text" name = "bintang">
            <button type="submit">Submit</button>
    </form>    
    <?php   }
    if (!empty($bintang)) {
        echo "Jumlah bintang : $bintang  <br><br>" 
    ?>
    <?php
        for ($i=0; $i < $bintang; $i++) { 
            echo $img;
        }
    
    ?>
    <form action = "" method = "POST">
        <input type="text" name="bintang" value="<?= $bintang ?>" hidden>
        <button type="submit" name="tambah" value="tambah">Tambah</button>
        <button type="submit" name="kurang" value="kurang">Kurang</button>
    </form>
    <?php
    }
    ?>