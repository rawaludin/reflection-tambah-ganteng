<?php
class Mobil {
    private $aki;
    private $tanki;
    public function __construct(Aki $aki, Tanki $tanki)
    {
        $this->aki = $aki;
        $this->tanki = $tanki;
    }
    public function start() {
        if ($this->aki->cekDaya() >= 5 & $this->tanki->cekBensin() >= 5) {
            echo "Broom.. brooom...!! \n";
        } else {
            echo "Aki kekurang daya silahkan di charge :( \n";
        }
    }
}
