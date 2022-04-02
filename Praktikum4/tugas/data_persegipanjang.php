<?php
require_once "class_persegipanjang.php";
$perpan = new Persegipanjang(15, 25);

echo"<br/>Luas Lingkaran : ".$perpan->getLuas();
echo "<br/>Keliling Lingkaran : ".$perpan->getKeliling();
?>