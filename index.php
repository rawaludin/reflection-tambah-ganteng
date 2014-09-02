<?php
require_once "Aki.php";
require_once "Mobil.php";

$aki = new Aki();
$fortuner = new Mobil($aki);
$fortuner->start();
