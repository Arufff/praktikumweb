<?php
    $celcius = 37.841;
    $fahrenheit = ($celcius * 9/5) + 32;
    $reamur = (4/5) * $celcius;
    $kelvin = $celcius + 273;

    echo "Fahrenheit (F) = $fahrenheit <br>";
    echo "Reamur (R) = $reamur <br>";
    printf ("Kelvin (K) = %.4f", $kelvin);
?>