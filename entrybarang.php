<h1>tabel barang</h1>

<form action="" method="post" enctype="multipart/form-data">
<label for="kd_kendaraan" > kode kendaraan</label>
<input type="text" name="kd_kendaraan"> <br> <br>

<label for="merk">merk</label>
<input type="text" name="merk"><br><br>

<label for="harga">harga</label>
<input type="text" name="harga"> <br><br>

<label for="stok">stok</label>
<input type="text" name="stok"> <br><br>

<label for="jl_transaksi"> jumlah transaksi</label>
<input type="text" name="jl_transaksi"> <br> <br>

<label for="jl_biaya"> jumlah biaya</label>
<input type="text" name="jl_biaya"> <br><br>


<input type="submit" name="simpan">

 </form>

 <?php 
 if (isset($_POST['simpan'])) {

 	$kd_kendaraan= $_POST['kd_kendaraan'];
 	$merk =$_POST['merk'];
 	$harga=$_POST['harga'];
 	$stok=$_POST['stok'];
 	$jl_transaksi=$_POST['jl_transaksi'];
 	$jl_biaya=$_POST['jl_biaya'];

 	$simpan=mysqli_query($conn, "INSERT INTO tb_barang(kd_kendaraan,merk,harga,stok,jl_transaksi,jl_biaya) values ('$kd_kendaraan', '$merk', '$harga', '$stok', '$jl_transaksi', '$jl_biaya')");
 }


  ?>