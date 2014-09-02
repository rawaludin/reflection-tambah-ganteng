<?php
class Aki {
    private $watt;
    public function __construct($watt = 5) {
        $this->watt = $watt;
    }
    public function cekDaya() {
        return $this->watt;
    }
}
