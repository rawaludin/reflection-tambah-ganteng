<?php
class Tanki {
    private $bensin;
    public function __construct($bensin = 10) {
        $this->bensin = $bensin;
    }
    public function cekBensin() {
        return $this->bensin;
    }
}
