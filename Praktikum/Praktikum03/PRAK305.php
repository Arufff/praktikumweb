<form method = "POST">
    <input type = "text" name = "kata">
    <button type="submit">submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["kata"])) {
            $kata = $_POST["kata"];
        }

        $huruf = strlen($kata);
        $array = str_split($kata);
        echo "<h3>Input</h3>";
        echo "$kata";
        echo "<h3>Output</h3>";
    
        for ($i=0; $i < $huruf; $i++) { 
            echo strtoupper($array[$i]);
            for ($j=1; $j < $huruf; $j++) { 
                echo strtolower($array[$i]);
            }
        }
    }    
?>