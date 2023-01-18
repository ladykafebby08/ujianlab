<style>
	table,
	th,
	td {
		border: 1px solid black;
	}
</style>

<h1>LAPORAN</h1>
<form action="" method="post" enctype="multipart/form-data">
	<label for="tanggal">tanggal</label>
	<input type="date" name="tanggal" id="">
	<input type="submit" name="simpan">

</form>
<?php
if (isset($_POST['simpan'])) {
	$tanggal = $_POST['tanggal'];
	if (empty($tanggal)) {
		$query = "SELECT tb_faktur.no_faktur, tb_faktur.tgl_faktur, tb_pelanggan.kd_pelanggan, tb_pelanggan.nm_pelanggan, tb_pelanggan.alamat, tb_pelanggan.kota, tb_barang.kd_kendaraan, tb_barang.merk, tb_barang.harga, tb_barang.stok, tb_barang.jl_transaksi, tb_barang.jl_biaya FROM tb_faktur INNER JOIN tb_pelanggan ON tb_faktur.kd_pelanggan = tb_pelanggan.kd_pelanggan INNER JOIN tb_barang ON tb_faktur.kd_kendaraan = tb_faktur.kd_kendaraan";
	} else {
		$query = "SELECT tb_faktur.no_faktur, tb_faktur.tgl_faktur, tb_pelanggan.kd_pelanggan, tb_pelanggan.nm_pelanggan, tb_pelanggan.alamat, tb_pelanggan.kota, tb_barang.kd_kendaraan, tb_barang.merk, tb_barang.harga, tb_barang.stok, tb_barang.jl_transaksi, tb_barang.jl_biaya FROM tb_faktur INNER JOIN tb_pelanggan ON tb_faktur.kd_pelanggan = tb_pelanggan.kd_pelanggan INNER JOIN tb_barang ON tb_faktur.kd_kendaraan = tb_faktur.kd_kendaraan
		where tb_faktur.tgl_faktur='$tanggal'";
	}
} else {
	$query = "SELECT tb_faktur.no_faktur, tb_faktur.tgl_faktur, tb_pelanggan.kd_pelanggan, tb_pelanggan.nm_pelanggan, tb_pelanggan.alamat, tb_pelanggan.kota, tb_barang.kd_kendaraan, tb_barang.merk, tb_barang.harga, tb_barang.stok, tb_barang.jl_transaksi, tb_barang.jl_biaya FROM tb_faktur INNER JOIN tb_pelanggan ON tb_faktur.kd_pelanggan = tb_pelanggan.kd_pelanggan INNER JOIN tb_barang ON tb_faktur.kd_kendaraan = tb_faktur.kd_kendaraan";
}
?>
<br><br><br>

<table>
	<thead>
		<tr>
			<th> no faktur </th>
			<th> tanggal faktur</th>
			<th> kode pelanggan</th>
			<th> nama pelanggan</th>
			<th>alamat</th>
			<th>kota</th>
			<th>kode kendaraan </th>
			<th> merk </th>
			<th>harga</th>
			<th> stok</th>
			<th> jumlah transaksi</th>
			<th> jumlah bayar</th>
		</tr>
	</thead>

	<tbody>
		<?php
		$ambil = mysqli_query($conn, $query);
		while ($pecah = mysqli_fetch_assoc($ambil)) {


		?>

			<tr>
				<td> <?= $pecah['no_faktur'] ?></td>
				<td> <?= $pecah['tgl_faktur'] ?></td>
				<td> <?= $pecah['kd_pelanggan'] ?></td>
				<td> <?= $pecah['nm_pelanggan'] ?></td>
				<td> <?= $pecah['alamat'] ?></td>
				<td> <?= $pecah['kota'] ?></td>
				<td> <?= $pecah['kd_kendaraan'] ?></td>
				<td> <?= $pecah['merk'] ?></td>
				<td> <?= $pecah['harga'] ?></td>
				<td> <?= $pecah['stok'] ?></td>
				<td> <?= $pecah['jl_transaksi'] ?></td>
				<td> <?= $pecah['jl_biaya'] ?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>