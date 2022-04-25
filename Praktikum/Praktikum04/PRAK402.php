<style>
    table, tr, th, td {
        border : 1px solid;
        border-collapse : collapse;
        padding : 14px;
        }
    th {
        background-color : #bfbdb8;
    }
</style>

<?php
    $array = [
        [
            "Nama" => "Andi",
            "NIM" => "2101001",
            "UTS" => "87",
            "UAS" => "90"
        ],

        [
            "Nama" => "Budi",
            "NIM" => "2101002",
            "UTS" => "76",
            "UAS" => "79"
        ],

        [
            "Nama" => "Tono",
            "NIM" => "2101003",
            "UTS" => "50",
            "UAS" => "41"
        ],

        [
            "Nama" => "Jessica",
            "NIM" => "2101004",
            "UTS" => "20",
            "UAS" => "75"
        ]
        ];

    for ($i=0; $i < count($array); $i++) { 
        $rata2 = (0.4 * $array[$i]["UTS"]) + (0.6 * $array[$i]["UAS"]);
        $array[$i]["Nilai Akhir"] = $rata2;
        if ($rata2 >= 80) {
            $array[$i]["Huruf"] = "A";
        }
        elseif ($rata2 >= 70 && $rata2 <= 79) {
            $array[$i]["Huruf"] = "B";
        }
        elseif ($rata2 >= 60 && $rata2 <= 69) {
            $array[$i]["Huruf"] = "C";
        }
        elseif ($rata2 >= 50 && $rata2 <= 59) {
            $array[$i]["Huruf"] = "D";
        }
        else {
            $array[$i]["Huruf"] = "E";
        }
    } ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
    <?php
    foreach($array as $a) {
        ?>
        <tr>
        <?php
        foreach($a as $b) {
            echo "<td>" . $b . "</td>";
        } ?>
        </tr>
        <?php
    } 
?>