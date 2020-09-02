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
    return $data;
  }
  
  private function readCsv($file)
  {
    $allData = [];
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $allData[] = $data;
      }
      fclose($handle);
      return $allData;
    }
  }
}