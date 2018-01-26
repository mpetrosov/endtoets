<?php

$citys = array("New York city", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbai");
sort($citys);
$clength = count($citys);
for($i = 0; $i < $clength; $i++){
    echo "$citys[$i],";
    echo "<br>";
}

echo "<br>";

array_push($citys, "Calcutta", "Los Angeles", "Osaka", "Beijing");
sort($citys);

$clength = count($citys);
for($i = 0; $i < $clength; $i++){
    echo "$citys[$i],";
    echo "<br>";
}
?>