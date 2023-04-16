<?php
require 'pegawai.php';
$pegawai1 = new Pegawai('0001','Ida','Manager','Kristen','Menikah');
$pegawai2 = new pegawai('0002','Gunawan','Kepala Bagian','Kristen','Menikah');
$pegawai3 = new pegawai('0003','Ricky','Asisten Manager','Islam','Menikah');
$pegawai4 = new pegawai('0004','Nurhaya','Staff','Islam','Menikah');
$pegawai5 = new pegawai('0005','Nurmiati','Karyawan','Islam','Menikah');


$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];
foreach ($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>