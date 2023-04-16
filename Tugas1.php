<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Bangun Datar</title>
</head>
<body>
<h1> Menghitung Luas Bangun Datar Jajar Genjang</h1>
    <form method="POST">
    <table>
        <tr>
            <td> Alas Jajar Genjang </td>
            <td>
                <input type="text" name="alas" require>
            </td>
        </tr>
        <tr>
            <td> Tinggi Jajar Genjang </td>
            <td>
            <input type="text" name="tinggi" require>
            </td>
        </tr>
        <tr>
            <td> Sisi Miring Jajar Genjang </td>
            <td>
            <input type="text" name="sisi" require>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
            </td>
        </tr>
    </table>
    </form>

    <?php

        if(isset($_POST['submit'])){
            $alas= $_POST['alas'];
            $tinggi= $_POST['tinggi'];
            $sisi= $_POST['sisi'];

            $Luasjajargenjang = $alas * $tinggi;
            $Kelilingjajargenjang = 2 * $alas + 2 * $sisi;
            echo 'Hasil Perhitungan Dari Luas Jajar Genjang';
            echo '<br> Maka Diketahui :';
            echo '<br> Alas Jajar Genjang : '.$alas;
            echo '<br> Tinggi Jajar Genjang : '.$tinggi;
            echo '<br> Sisi Miring Jajar Genjang : '.$sisi;

            echo '<br> Maka Luas Dari Bangun Datar Jajar Genjang adalah Alas x Tinggi = '.$Luasjajargenjang;
            echo '<br> Maka Keliling Dari Bangun Datar Jajar Genjang adalah 2 x Alas + 2 x Sisi Miring = '.$Kelilingjajargenjang;

            echo '<br>';
            echo '<br>by. @Ida Natalia Br Sinaga';

        } 

    ?>
</body>
</html>