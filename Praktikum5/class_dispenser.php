<?php
class Dispenser{
    protected $volume;
    protected $harga_segelas;
    private $volume_gelas;
    public $nama_minuman;

    public function isi($vol){
        return $this->volume = $vol;
    }
    public function harseg($hs){
        return $this->harga_segelas = $hs;
    }
    public function volgel($vg){
        return $this->volume_gelas = $vg;
    }
    function namMin($nM){
        $this->nama_minuman = $nM;
    }
}

?>