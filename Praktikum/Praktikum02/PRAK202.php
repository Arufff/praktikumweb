<form method = "POST">
    <div>
        <label for = "">Nama:</label>
        <input type = "text" name = "nama" required><font color = "red">*</font>
    </div>
    <div>
        <label for = "">Nim:</label>
        <input type = "text" name = "nim" required><font color = "red">*</font>
    </div>
    <div>
        <label for = "">Jenis Kelamin:</label><font color = "red">*</font><br/>
        <input type="radio" name="jenisklmn" value="Laki-laki">Laki-laki<br/>
        <input type="radio" name="jenisklmn" value="Perempuan" required>Perempuan<br/>
    </div>  
    <button type="submit">Submit</button>
</form>

<?php
    $nama = NULL;
    $nim = NULL;
    $jenisklmn = NULL;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nama"])) {
            $nama = $_POST["nama"];
        }
        
        if (empty($_POST["nama"])) {
            echo "nama tidak boleh kosong";
        }

        if (isset($_POST["nim"])) {
            $nim = $_POST["nim"];
        }

        if (isset($_POST["jenisklmn"])) {
            $jenisklmn = $_POST["jenisklmn"];
        }

        echo "<h2>Output</h2>";
        echo "$nama<br/>";
        echo "$nim<br/>";
        echo "$jenisklmn<br/>";
    }
?>