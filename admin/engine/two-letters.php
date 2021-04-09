<?php
$fp = fopen('admin/engine/lista-cuvinte.txt', 'r');
fseek($fp, -2, SEEK_END);
$data = fread($fp, 2);
echo $data;
fclose($fp);
?>