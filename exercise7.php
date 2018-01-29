<?php
//Write a PHP script that replaces the first 'the' of the following string with 'That'.

$sentence  = "the quick brown fox jumps over the lazy dog.";
$old = array("the quick");
$new = array("That quick");
$newsentence = str_replace($old, $new, $sentence);
echo $newsentence;

?>