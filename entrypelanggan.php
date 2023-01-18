<hr>
<h1> tabel pelanggan </h1>
<form action="" method="post" enctype="multipart/form-data">

<label for="kd_pelanggan"> Kode Pelanggan</label>
<input type="text" name="kd_pelanggan"> <br><br>

<label for="kd_kendaraan">Kode kendaraan</label>
<input type="text" name="kd_kendaraan"> <br> <br>

<label for="nm_pelanggan">nama pelanggan</label>
<input type="text" name="nm_pelanggan"> <br><br>

<label for="alamat">alamat</label>
<input type="text" name="alamat"> <br><br>

<label for="kota"> kota</label>
<input type="text" name="kota"><br><br>

<input type="submit" name="simpan" id="simpan" value="simpan" class="tombol simpan">

</form>
<?php 
if (isset($_POST['simpan'])) {
 	$kodepelanggan = $_POST['kd_pelanggan'];
    $kodekendaraan = $_POST ['kd_kendaraan'];
 	$nampelanggan = $_POST['nm_pelanggan'];
 	$alamat = $_POST['alamat'];
 	$kota	= $_POST['kota'];

 	$simpan =mysqli_query($conn, "INSERT INTO tb_pelanggan(kd_pelanggan,kd_kendaraan,nm_pelanggan,alamat,kota) values ('$kodepelanggan','$kodekendaraan', '$nampelanggan', '$alamat', '$kota')");
 	

 } 
?>