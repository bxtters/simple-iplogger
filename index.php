<!doctype html>
<title> example </title>
<head>
<center> hello guy </center>
</head>

<?php

$ip = $_SERVER['REMOTE_ADDR'];

$file = "fucked.txt";
$text = file_get_contents($file);
$text .=$ip . "\n";
file_put_contents($file, $text);


?>