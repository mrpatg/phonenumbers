<?php
$path = 'numbers/';

$files = scandir($path);
foreach($files as $file) {
    $filestring = file_get_contents($path.$file);
  //((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}
  if(preg_match('/((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}/', $filestring)){
      echo $file;
      echo "<br>";
  }

}



?>