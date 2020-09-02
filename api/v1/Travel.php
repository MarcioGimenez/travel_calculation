<?php

class Travel
{
  public function process($from, $to)
  {
    $travelProcess = new TravelProcess(PATH_INPUT_ROUTES);
    return $travelProcess->routeProcess($from, $to);
  }
  
  public function add($url, $to, $from, $price)
  {
    $file = fopen(PATH_INPUT_ROUTES, 'a+');
    if ($file == false) die('File not found.');
    $text = $from . ',' . $to . ',' . $price;
    fwrite($file, $text);
    fclose($file);
    return 'save successfully';
  }
  
}