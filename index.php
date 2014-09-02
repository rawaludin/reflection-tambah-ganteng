<?php
require_once "Aki.php";
require_once "Mobil.php";
require_once "Tanki.php";

$aki = new Aki();
$tanki = new Tanki();
$mobil = new Mobil($aki, $tanki);
$mobil->start();
