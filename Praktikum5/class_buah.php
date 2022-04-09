<?php
class Buah{
    public $name;
    protected $color;
    private $berat;

    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->color = $b;
    }
}

$mangga = new Buah();
echo $mangga -> name = 'Mangga';
echo '<br/>';
echo $mangga -> set_color('Hijau');
echo '<br/>';
echo $mangga -> set_berat('300 Kg');
?>