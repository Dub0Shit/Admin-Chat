<?php 

$Text = $_GET['Text']; // �����

$file = 'file.txt';

$current = file_get_contents($file);
$current .= "$Text\n";

file_put_contents($file, $current);

?>