<?php
//Create an array with the following city names: New York City, Seoul, Tokyo,
//Mexico City, Shanghai, Lagos, Cairo, Buenos Aires, London and Mumbai. Sort the array and
//cities to the array: Calcutta, Los Angeles, Osaka and Beijing. Next, sort the array and print
//the values in the array separated by commas using a for loop.
//print the values in the array separated by commas using a for loop. Next, add the following

$citys = array("New York city", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbay");
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