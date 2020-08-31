<?php

class travelProcess
{
  public $path;
  
  public function __construct($path)
  {
    $this->path = $path;
  }
  
  public function routeProcess($from, $to)
  {
    $data = $this->readCsv($this->path);
  }
  
  private function readCsv($file)
  {
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        var_dump($data);
      }
      fclose($handle);
    }
  }
}