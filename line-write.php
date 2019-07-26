<?php
$request = file_get_contents('php://input');
$request_array = json_decode($request, true);   // Decode JSON to Array

$my_file = 'output.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$value = "";
if ( sizeof($request_array['param1']) > 0 )
{
  foreach ($request_array['param1'] as $param1)
  {
    
    //$data = 'This is the data';
    //$datetime = new DateTime();
    //$data = $datetime->format('Y-m-d H:i:s');
    $value .= $param1."";
  }
}
else
{
  $value = "Not Value";
}
 
fwrite($handle, "value : ".$value);

?>
