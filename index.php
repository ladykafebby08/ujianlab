<?php 
include"koneksi.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> mobil</title>
 </head>
 <body>
 	<header>
 		<h1>Mobil</h1>
 	</header>
 	<main>
 		<nav>
 			<ul>
 				<li><a href="?modul=home"> home</a></li>
 				<li><a href="?modul=entrypelanggan">entry pelanggan</a></li>
 				<li><a href="?modul=entrybarang">entry barang</a></li>
 				<li><a href="?modul=faktur">faktur</a></li>
 				<li><a href="?modul=laporan">laporan</a></li>
 			</ul>
 		</nav>
 		<div>
 			<?php 	
 			if(!empty($_GET["modul"])) {
 				include_once($_GET["modul"] . ".php");
 			} else {
 				include"home.php";
 				
 			} 
 			?>
 		</div>
 	</main>
 	<footer>
 		<center>
 			<p>&copy;LADYKA FEBBY OLIVIA_19101152610252</p>
 		</center>
 	</footer>
 
 </body>
 </html>