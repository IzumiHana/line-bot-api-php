<?php
$request = file_get_contents('php://input');
$request_array = json_decode($request, true);   // Decode JSON to Array
if ( sizeof($request_array['param1']) > 0 )
{
  foreach ($request_array['events'] as $event)
  {
    $my_file = 'output.txt';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    //$data = 'This is the data';
    $datetime = new DateTime();
    //$data = $datetime->format('Y-m-d H:i:s');
    fwrite($handle, "value ".$param);
  }
}

?>
