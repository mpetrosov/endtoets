<?php
$i = 0;
$j = 0;

echo "<table border= '1'>";
for($x = 1; $x <=5; $x++){
    echo "<tr>";

    for($y = 1; $y <= 5; $y++){
        echo "<td>".$x*$y."</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>