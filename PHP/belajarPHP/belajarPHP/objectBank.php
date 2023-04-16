<?php
require 'Bank.php';
// ciptakan object

$n1 = new Bank('01','Ida Natalia',200000000);
$n2 = new Bank('02','Merida',400000000);
$n3 = new Bank('03','Agnes',500000000);
$n4 = new Bank('04','Topan',400000000);
$n5 = new Bank('05','Piedro',300000000);
$n6 = new Bank('06','Reza',200000000);

$n1->ambil(2000000);
$n1->setor(3000000);
$dataNasabah = array($n1,$n2,$n3,$n4,$n5,$n6);
foreach ($dataNasabah as $data){
    $data->cetak();
}

echo'<br> jumlah Nasabah'.Bank::$jml.'Orang';
?>