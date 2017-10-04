<?php 
$Text = $_GET['Text']; // Текст

$file = 'online.txt';
$today = date("G");
$today1 = $today + 3;
$today = date("i:s M j Y");

$current = file_get_contents($file);
$current .= "$Text | $today1:$today\n";

file_put_contents($file, $current);

?>