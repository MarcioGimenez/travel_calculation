<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'Rest.php';
require_once 'Travel.php';
require_once '../../config/config.php';
require_once '../../app/business/TravelProcess.php';


if (isset($_REQUEST)) {
  $rest = new Rest;
  echo $rest->open($_REQUEST);
}