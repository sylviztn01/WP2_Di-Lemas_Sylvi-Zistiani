<html>
<head>
<title>Form Input Data Siswa</title>
</head>
<body>
<center>
<form action="<?= base_url('datasiswa/cetak'); ?>"
method="post">
<table>
<tr>
<th colspan="3">
Form Input Data Siswa
</th>
</tr>
<tr>
<td colspan="3">
<hr>
</td>
</tr>
<tr>
<th>Nama Siswa</th>
<th>:</th>
<td>
<input type="text" name="nama" id="nama">
</td>
</tr>
<tr>
<th>NIS</th>
<td>:</td>
<td>
<input type="text" name="nis" id="nis">
</td>
</tr>
<tr>
<th>Kelas</th>
<td>:</td>
<td>
<input type="text" name="kelas" id="kelas">
</td>
</tr>
<tr>
<th>Tanggal Lahir</th>
<td>:</td>
<td>
<input type="text" name="tgl" id="tgl">
</td>
</tr>
<tr>
<th>Tempat Lahir</th>
<td>:</td>
<td>
<input type="text" name="tempat" id="tempat">
</td>
</tr>
<tr>
<th>Alamat</th>
<td>:</td>
<td>
<input type="text" name="alamat" id="alamat">
</td>
</tr>
<tr>
    <th>
        Jenis Kelamin
    </th>
    <td>:</td>
    <td>
    <input type="radio" name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    </td>
</tr>
<tr>
<th>Agama</th>
<td>:</td>
<td>
<select name="agama" id="agama">
<option value="">Pilih Agama</option>
<option value="islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="katolik">Katolik</option>
<option value="budha">Budha</option>
<option value="hindu">Hindu</option>
<option value="protestan">Protestan</option>
<option value="khonghucu">Khonghucu</option>
</select>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>