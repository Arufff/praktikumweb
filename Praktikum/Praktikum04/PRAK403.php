<style>
    table, tr, th, td {
        border : 1px solid;
        border-collapse : collapse;
        padding : 7px;
        }
    th {
        background-color : #bfbdb8;
    }
    #revisi {
        background-color : #ff0000;
    }
    #tdkrevisi {
        background-color : #188f00;
    }
</style>

<?php
    $array = [
        [
            "no" => "1",
            "nama" => "Ridho",
            "mk" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Basah", "Arsitektur Komputer"],
            "sks" => ["4", "4", "4", "4"]
        ],

        [
            "no" => "2",
            "nama" => "Ratna",
            "mk" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],
            "sks" => ["2", "2", "3"]
        ],

        [
            "no" => "3",
            "nama" => "Tono",
            "mk" => ["Rekayasa Perangkat Lunak", "Analis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
            "sks" => ["3", "3", "3", "3"]
        ]
        ];
    
    foreach ($array as $key => $value) {
        $array[$key]["total"] = array_sum($value["sks"]);
        if ($array[$key]["total"] < 7) {
            $array[$key]["keterangan"] = "<div id='revisi';'>Revisi KRS</div>";
        }
        else {
            $array[$key]["keterangan"] = "<div id='tdkrevisi';'>Tidak Revisi</div>";
        }
    }
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
    <?php
    for ($i=0; $i < count($array); $i++) { 
        for ($j=0; $j < count($array[$i]["mk"]); $j++) { 
            ?>
            <tr>
            <?php
            if ($j == 0) {
                echo "<td>".$array[$i]["no"]."</td>";
                echo "<td>".$array[$i]["nama"]."</td>";
                echo "<td>".$array[$i]["mk"][$j]."</td>";
                echo "<td>".$array[$i]["sks"][$j]."</td>";
                echo "<td>".$array[$i]["total"]."</td>";
                echo "<td>".$array[$i]["keterangan"][$j]."</td>";
            }
            else {
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>".$array[$i]["mk"][$j]."</td>";
                echo "<td>".$array[$i]["sks"][$j]."</td>";
                echo "<td></td>";
                echo "<td></td>";
            }?>
            </tr>
            <?php
        }
    } ?>
    </table>
    <?php
?>