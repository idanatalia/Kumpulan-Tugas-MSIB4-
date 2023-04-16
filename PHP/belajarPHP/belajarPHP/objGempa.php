<?php
require 'Gempa.php';
$g1 = new Gempa('Banten',0.1);
$g2 = new Gempa('Jawa',0.2);
$g3 = new Gempa('Aceh',0.3);
$g4 = new Gempa('Sumatera Selatan',0.4);

$ar_data = [$g1,$g2,$g3,$g4];
foreach ($ar_data as $d){
    $d->cetak();
}
?>