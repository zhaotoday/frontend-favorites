<?php
$jsonString = file_get_contents('data.json');
$jsonArr = json_decode($jsonString);

print_r($jsonArr->results);
?>