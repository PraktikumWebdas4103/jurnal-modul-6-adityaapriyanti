<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<center>
		<h2><p>Registrasi Mahasiswa</p></h2>
	<form action="proses6.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required="" maxlength="35"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required="" max="10"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="radio" name="kls" value="D3MI-41-01" required="">D3MI-41-01<br>
				<input type="radio" name="kls" value="D3MI-41-02">D3MI-41-02<br>
				<input type="radio" name="kls" value="D3MI-41-03">D3MI-41-03<br>
				<input type="radio" name="kls" value="lain">Other<br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Male" required="">Male<br></td>
				<td><input type="radio" name="jeniskelamin" value="Female">Female<br></td>
			</tr>
			</tr>
			<tr>
				<td>Hobi</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Tidur">Tidur <br>
				<input type="checkbox" name="hobi[]" value="Drama">Drama 
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Menari">Menari<br>
				<input type="checkbox" name="hobi[]" value="Membaca">Membaca
			</td>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
    		<tr>
    			<td>Alamat</td>
    			<td><input type="textarea" name="alamat" style="width: 100px;height: 50px"></td>
    		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kls'];
		$jeniskel=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];

		for($x=0;$x<$jumlahob;$x++){
			mysql_query("insert into data values('','$hobi[$x]')");
		}

		$error=array();
		} if(strlen($_POST['nama']) >= 35){
			$error['nama']=="Harus 25";
		if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		} if(empty($email)){
			$error['kls']=="kelas harus diisi";
		}if(empty($kelas)){
			$error['jeniskelamin']=="jeniskelamin harus diisi";
		}if(empty($jeniskel)){
			$error['hobi']=="hobi harus diisi";
		}if(empty($hobi)){
			$error['fakultas']=="fakultas harus diisi";
		}if(empty($alamat)){
			$error['alamat']=="alamat harus diisi";
		}
}
?>

	