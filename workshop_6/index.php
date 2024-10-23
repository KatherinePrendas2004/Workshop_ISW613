<?php
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", 
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", 
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", 
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);

// Ordenar por el nombre del país (clave)
ksort($ceu);

foreach ($ceu as $country => $capital) {
    echo "La capital de $country es $capital.<br>";
}

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
                      73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 
                      79, 73);

// Calcular el promedio
$average = array_sum($temperatures) / count($temperatures);
echo "<br>La temperatura media es: " . round($average, 1) . "<br><br>";

// Eliminar duplicados y ordenar las temperaturas
$unique_temperatures = array_unique($temperatures);
sort($unique_temperatures);

// Obtener las 5 más bajas y más altas
$lowest = array_slice($unique_temperatures, 0, 5);
$highest = array_slice($unique_temperatures, -5);

echo "Lista de las 5 temperaturas más bajas (sin duplicados): " . implode(", ", $lowest) . "<br>";
echo "Lista de las 5 temperaturas más altas (sin duplicados): " . implode(", ", $highest) . "<br>";
?>
