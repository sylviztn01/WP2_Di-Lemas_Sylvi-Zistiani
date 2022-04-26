<html>
<head>
<title>Tampil Data Siswa</title>
</head>
<body>
<center>
<table>
<tr>
<th colspan="3">
Tampil Data Siswa
</th>
</tr>
<tr>
<td colspan="3">
<tr>
</td>
</tr>
<tr>
<th>Nama Siswa</th>
<th>:</th>
<br>
<td>
<?= $nama; ?>
</td>
</tr>
<tr>
<td>NIS</td>
<td>:</td>
<br>
<td>
<?= $nis; ?>
</td>
</tr>
<tr>
<td>Kelas</td>
<td>:</td>
<br>
<td>
<?= $kelas; ?>
</td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<br>
<td>:</td>
<td>
<?= $tgl; ?>
</td>
</tr>
<tr>
<td>Tempat Lahir</td>
<br>
<td>:</td>
<td>
<?= $tempat; ?>
</td>
</tr>
<tr>
<td>Alamat</td>
<br>
<td>:</td>
<td>
<?= $alamat; ?>
</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<br>
<td>
<?= $gender; ?>
</td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<br>
<td>
<?= $agama; ?>
</td>
</tr>
<br>
<br>
<tr>
<td colspan="3" align="center">
<a href="<?= base_url('datasiswa');
?>">Kembali</a>
</td>
</tr>
</table>
</center>
</body>
</html>