<?php
$name = "George";
$age = 50;
$male = true​;
$list = [1,2,5,8,9];



if (is_string ($name) === true){
    echo "Value is String<br>";
}

if(is_int($age)=== true){
    echo "Value is Integer<br>";
}

if (is_bool($male)=== false){
    echo "Value is Boolean<br>";
}

if (is_array ($list)=== true){
    echo "Value is Array";
}
?>