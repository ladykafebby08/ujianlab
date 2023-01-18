<h2>faktur</h2>
<form method="post" enctype="multipart/form-data">

    <label for="no_faktur">No Faktur</label>
	<input type="text" name="no_faktur"> <br><br>

	<label for="tgl_faktur"> tanggal faktur</label>
	<input type="date" name="tgl_faktur"> <br><br>

	<label for="kd_pelanggan"> kode pelanggan</label>
	<input type="text" name="kd_pelanggan"> <br><br>

	<label for="kd_kendaraan"> kode kendaraan</label>
	<input type="text" name="kd_kendaraan"> <br><br>

	<input type="submit" name="simpan">
</form>

<?php 	
if (isset($_POST['simpan'])) {
	$no_faktur= $_POST['no_faktur'];
	$tgl_faktur= $_POST['tgl_faktur'];
	$kd_pelanggan= $_POST['kd_pelanggan'];
	$kd_kendaraan= $_POST['kd_kendaraan'];
	
	$simpan=mysqli_query($conn, "INSERT INTO tb_faktur(no_faktur,tgl_faktur,kd_pelanggan,kd_kendaraan) values ('$no_faktur', '$tgl_faktur', '$kd_pelanggan','$kd_kendaraan')");
}

 ?>