<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
	input, textarea {
		background-color: #ccffff;
		padding: 10px;
		border-radius: 10px;
		border:none;
		color: red;
		width: 200px;
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
		font-weight: bold;
	}
	</style>
</head>
<body>

<form action="#">
<table class="tb">
	<tr><td>NIS</td><td> :</td> <td><input type="text" placeholder="isikan nis" name="nama" ></td></tr>
	<tr><td>NAMA SISWA</td><td> :</td> <td><input type="text" placeholder="isikan nama" name="nama"></td></tr>
	<tr><td>TEMPAT LAHIR</td><td> :</td> <td><input type="text" placeholder="isikan nama" name="nama"></td></tr>
	<tr><td>TANGGAL LAHIR</td><td> :</td> <td><input type="date" placeholder="isikan nama" name="nama"></td></tr>
	<tr><td>JENIS KELAMIN </td><td>:</td><td><input type="radio" name="sex" value="male">Male<input type="radio" name="sex" value="female">Female</td></tr>
	<tr><td>ALAMAT</td><td> :</td> <td><textarea name="alamat"></textarea></td></tr>

</table>
<tr><td>
	<input type="submit" class="submit"></td><td> <input type="reset" class="reset"></td></tr>
</form>
<form>

</form>
</body>
</html>
