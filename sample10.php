<?php
$myArray = ["a", "b", "c", "d"];
$removed = array_splice($myArray, 1, 2);
echo $myArray, '\n';
print_r($myArray);
echo $removed, '\n';
print_r($removed);
?>