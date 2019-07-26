<?php
$param = $_REQUEST['param1'];
$my_file = 'output.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
//$data = 'This is the data';
$datetime = new DateTime();
//$data = $datetime->format('Y-m-d H:i:s');
fwrite($handle, "value ".$param);
?>
