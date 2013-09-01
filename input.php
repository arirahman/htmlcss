<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MASTER DATA SISWA</title>

	<style>
	input, textarea {
		background-color: #ccffff;
		padding: 10px;
		border-radius: 10px;
		border:none;
		color:green;
		
	}
	
	.tombol {
		
		background-color: yellow;
		padding:10px;
		border-radius:15px;

	}
	
	hr {
		border: 2px solid green;
	}
	table {
		
		padding: 10px;
		border-radius:10px;
		background-color:#b2f230;
	}
	.submit, .reset {
		color:blue;
		width: 100px;
		font-family: Tahoma;
		font-weight: bold;
		border:3px solid green;
	}

	.tb {
		font-family: Tahoma;
		color:green;
		font-size: 12px;
		font-weight: bold;
	}

	legend {
		font-family: Tahoma;
		font-weight: bolder;
		text-align: center;
	}

	select {
		width:250px;
		height: 30px;
		border-radius:10px;
		border:none;
		background-color:#ccffff;
		padding-left: 10px;
		color:green;
		font-weight: bold;
	}

	.kepala {
		background-color: yellow;
		height: 50px;
		border-radius: 20px 20px 0 0;
	}
	</style>
</head>
<body>

<form action="#">
<table class="tb">
									
	<tr><td colspan="4" class="kepala"><center> DATA SISWA</center></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td>NIS</td><td> :</td> <td><input type="text" placeholder="isikan nis" name="nama" required></td></tr>
	<tr><td>NAMA SISWA</td><td> :</td> <td><input type="text" placeholder="isikan nama" name="nama" required></td></tr>
	<tr><td>TEMPAT LAHIR</td><td> :</td> <td><input type="text" placeholder="isikan Tempat Lahir" name="nama" required></td></tr>
	<tr><td>TANGGAL LAHIR</td><td> :</td> <td><input type="date" placeholder="isikan nama" name="nama" required></td></tr>
	<tr><td>JENIS KELAMIN </td><td>:</td><td><input type="radio" name="jk" value="L">Laki-Laki<input type="radio" name="jk" value="P">Perempuan</td></tr>
	<tr><td>AGAMA</td><td> :</td> <td><select name="agama" id="" required>
														<option value="">- Silahkan Pilih Agama -</option>
														<option value="Islam">Islam</option>
														<option value="Protestan">Kristen Protestan</option>
														<option value="Katolik">Kristen Katolik</option>
														<option value="Budha">Budha</option>
														<option value="Hindu">Hindu</option>
														<option value="Kunghoco">Kunghoco</option>							
									  </select></td></tr>
	<tr><td>ALAMAT</td><td> :</td> <td><textarea name="alamat" required></textarea></td></tr>
	<tr><td>NO. HP</td><td> :</td> <td><input type="text" placeholder="isikan No. HP" name="nama" required></td></tr>
	<tr><td>ASAL SMP</td><td> :</td> <td><input type="text" placeholder="isikan nama" name="nama" required></td></tr>
	<tr><td>KELAS</td><td> :</td> <td><select name="kelas" id="">
											<option value="">- Silahkan Pilih Kelas -</option>
											<option value="X A TKJ ">X A TKJ </option>
											<option value="X B TKJ ">X B TKJ </option>
											<option value="X A Akuntansi">X A Akuntansi</option>
											<option value="X B Akuntansi">X B Akuntansi</option>
											<option value="X Pemasaran">X Pemasaran</option>
											<option value="XI A TKJ ">XI A TKJ </option>
											<option value="XI B TKJ ">XI B TKJ </option>
											<option value="XI A Akuntansi">XI A Akuntansi</option>
											<option value="XI B Akuntansi">XI B Akuntansi</option>
											<option value="XI Pemasaran">XI Pemasaran</option>
											<option value="XII A TKJ">XII A TKJ </option>
											<option value="XII B TKJ">XII B TKJ </option>
											<option value="XII A Akuntansi">XII A Akuntanasi</option>
											<option value="XII B Akuntansi">XII B Akuntansi</option>
											<option value="XII Pemasaran">XII Pemasaran</option>
	</select></td></tr>

	<tr><td>JURUSAN</td><td> :</td> <td><select name="jurusan" id="">
											<option value="">- Silahkan Pilih Jurusan -</option>
											<option value="TKJ">Teknik Komputer dan Jaringan</option>
											<option value="Akuntansi">Akuntansi</option>
											<option value="Pemasaran">Pemasaran</option>
	</select></td></tr>		
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td colspan="4" class="kepala"><center> DATA ORANG TUA</center></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td>NAMA ORANG TUA</td><td> :</td> <td><input type="text" placeholder="isikan nama orang tua" name="nama" required></td></tr>
	<tr><td>ALAMAT ORANG TUA</td><td> :</td> <td><input type="text" placeholder="isikan alamat orang tua" name="nama" required></td></tr>
	<tr><td>NO HP  ORANG TUA</td><td> :</td> <td><input type="text" placeholder="isikan no hp orang tua" name="nama" required></td></tr>
	<tr><td>PEKERJAAN ORANG TUA</td><td> :</td> <td><input type="text" placeholder="isikan pekerjaan orang tua" name="nama" required></td></tr>
	<tr><td>PENGHASILAN ORANG TUA</td><td> :</td> <td><input type="text" placeholder="isikan jumlah penghasilan orang tua" name="nama" required></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td colspan="4" class="tombol"><input type="submit" class="submit" value="Simpan"> <input type="reset" class="reset" value="Batal"></td></tr>
</table>
	
</form>
<form>

</form>
</body>
</html>
