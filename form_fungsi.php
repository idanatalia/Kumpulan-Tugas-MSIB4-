<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javvascript"=>20, "RWD Bpptstrap"=>20, "PHP"=>30, "MySQL"=>30, "Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya","Lainnya"];
?>
<fieldset style="background-color:iceblue;">
    <legend> Form Registrasi Kelompok Belajar</legend>
<table>
    <thead>
        <tr>
            <th>Form Register</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td> Nama :</td>
                <td>
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td> Jenis Kelamin :</td>
                <td>
                <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki &nbsp;
                <input type="radio" name="jk" value="Laki-Laki"> Perempuan
                </td>
            </tr>
            <tr>
                <td> Program Studi :</td>
                <select name="prodi" id ="">
                <?php
                foreach($ar_prodi as $prodi => $v){
                    ?>
                    <option value="<?= $prodi ?>"><?=$v ?></option>
                    <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> skill Programing :</td>
                <td>
                    <?php
                    foreach ($ar_skill as $skill => $s){
                        ?>
                <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                <?php} ?>
                </td>
            </tr>
            <tr>
                <td> Domisili :</td>
                <select name="domisili" id = "">
                <?php
                foreach($domisili as $d){
                    ?>
                    <option value="<?= $d ?>"><?=$d ?> </option>
                    <?php } ?>
                    </select>
                </td>
            </tr>
        </form>
    </tbody>

</table>
                    <!-- <?php }?> -->
                </select>
            </tr>
        </tbody>
    <tfoot>
        <tr>
            <th colspan="2">
            <br><button name="proses">submit</button>
            </th>
        </tr>
    </tfoot>
</fieldset>
<?php

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
}
?>
NIM : <?= $nim ?> <br>
Nama : <?= $nama?> <br>
Jenis Kelamin : <?= $jk ?> <br>
Program Studi : <?= $prodi ?> <br>
Skill :
<?php
foreach($skill as $s){ ?>
<?=$s ?>,
<?php } ?>