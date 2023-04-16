<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
$d1 = new Dosen ('Oda','L','111','M.Kom');
$d2 = new Dosen ('Andi','L','112','M.Kom');
$m1 = new Mahasiswa('Ali','L','3','Teknik Informatika');
$m2 = new Mahasiswa('Siti','L','3','Teknik Informatika');
$s = new Staff('Ari','L','00123','Staff waket',1000000)

$ar_data = [$d1,$d2,$m1,$m2];


foreach($ar_data as $data){
    $data->cetak();

        
    }

?>