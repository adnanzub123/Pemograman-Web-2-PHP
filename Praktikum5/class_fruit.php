<?php
class Fruit{
    public $nama;
    public $warna;

    public function _construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    public function intro(){
        echo "Nama Aku adalah {$this->nama} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Aku adalah sebuah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry", "Merah");
$buah->intro();
$buah->message();
?>