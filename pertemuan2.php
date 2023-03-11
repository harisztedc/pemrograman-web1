<?php
$jenis_kelamin = "L";
$nama_lengkap = "Muhammad Harisz Ryadi";
$umur = 27;
$berat = 72.5;
$tinggi = 186.2;
$menikah = false;
?>

<table border="1" style="border-collapse: collapse;">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama_lengkap; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><?php echo $umur; ?></td>
    </tr>
    <tr>
        <td>Berat</td>
        <td>:</td>
        <td><?php echo $berat . ' kg';?></td>
    </tr>
    <tr>
        <td>Tinggi</td>
        <td>:</td>
        <td><?php echo $tinggi . ' cm';?></td>
    </tr>
</table>