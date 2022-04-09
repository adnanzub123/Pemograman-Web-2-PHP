<?php
require_once 'class_dispenser.php';
$aqua = new Dispenser();
echo "Nama Minuman : ".$aqua -> nama = 'Aqua';
echo '</br>';
echo "Volume Botol Minuman : ".$aqua -> isi(1000)." Ml";
echo '</br>';
echo "1 Gelas Seharga : ".$aqua -> harseg('Rp.7500');
echo '</br>';
echo "Adnan Membeli 1 botol aqua dengan Harga ".$aqua -> harseg('Rp.7500')." dengan volume gelas sebesar ".$aqua -> volgel(250)." Ml";
echo '</br>';
echo "Sisa Volume botol minuman Aqua gelas sebesar : ".$aqua -> isi(1000) - $aqua -> volgel(250). " Ml";
?>