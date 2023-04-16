<?php
require_once 'Lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';
 
$b1 = new Lingkaran(5);
$b2 = new persegipanjang(3,6);
$b3 = new segitiga(3,5);

$bidang =[$b1,$b2,$b3];
$ar_judul = ['No','Nama Bangun','Luas Bidang','Keliling Bidang'];
// foreach($bidang as $b){
//     echo '<br/ Nama  Bidang : >'.$b->namabidang();
//     echo '<br/>Luas Bidang : '.$b->luasBidang();
//     echo '<br/>Keliling Bidang : '.$b->kelilingBidang();
//     echo '<hr>';
// }
?>
<table border="1" bgcolor="green" cellpading="7px" width="100%">
    <thead>
    <tr>
        <?php 
                    foreach($ar_judul as $jdl){
                ?>
                <th><?= $jdl ?></th>
         <?php } ?>
    </tr>
    </thead>
    <tbody bgcolor="iceblue">
        <?php 
        $no = 1;
        foreach($bidang as $b){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $b->namabidang() ?></td>
                <td><?= $b->luasBidang() ?> Cm</td>
                <td><?= $b->kelilingBidang() ?> Cm<sup>2</sup></td>
            </tr>
            <?php
            $no++;
        }
        ?>
</table>