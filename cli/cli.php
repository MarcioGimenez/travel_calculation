#!/usr/bin/php -q
<?php
require_once '../config/config.php';
require_once '../app/business/TravelProcess.php';
echo "Please enter the route:\n";
$strRoute = fread(STDIN, 7);
$route = explode('-', $strRoute);
$path = '../data/input-routes.csv';
$travelProcess = new travelProcess($path);
$travelProcess->routeProcess($route[0], $route[1]);
echo 'best route: ', $strRoute, "\n";
?>
