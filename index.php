<?php
require_once "Aki.php";
require_once "Mobil.php";
require_once "Tanki.php";
require_once "Container.php";

$mobil = Container::build('Mobil');
$mobil->start();
