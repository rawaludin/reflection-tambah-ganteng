<?php
class Mobil {
    private $aki;
    public function __construct(Aki $aki)
    {
        $this->aki = $aki;
    }
    public function start() {
        if ($this->aki->cekDaya() >= 5 ) {
            echo "Broom.. brooom...!! \n";
        } else {
            echo "Aki kekurang daya silahkan di charge :( \n";
        }
    }
}
