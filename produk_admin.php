<!DOCTYPE html>
<html>
	<head>
		<title>Produk Mister Geprek</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Produk Admin</h1>
				<nav>
					<ul>
						<li><a href="index_admin.php">Home</a></li>
						<li><a href="produk_admin.php" class="current">Produk</a></li>
						<li><a href="event_admin.php">Event</a></li>
						<li><a href="infoperusahaan_admin.php">Informasi Perusahaan</a></li>
						<li><a href="kontakperusahaan_admin.php">Kontak Perusahaan</a></li>
						<li><a href="pemesanan_admin.php">Pemesanan</a></li>
						<li><a href="logout.php">Log Out</a></li
					</ul>
				</nav>
			</header>
			<section class="courses">
				<br>
				<font face = "Open Sans" size = "5px" color = "#205D76"><center>Produk Mister Geprek</center></font>
				<p align = "right"><a href="input_event.php">+ TAMBAH DATA</a></p>
			
				<table border="1" class="table" width=100%>
					
					<tr style="background-color: #FFAAA8;">
						<th><font color=white size="2px">Nama Produk</font></th>
						<th><font color=white size="2px">Jenis Produk</font></th>
						<th><font color=white size="2px">Harga Produk</font></th>
						<th><font color=white size="2px">Deskripsi</font></th>
						<th><font color=white size="2px">Edit</font></th>
						
					</tr>
					<?php 
					include "koneksi.php";
					$query_mysql = mysql_query("SELECT * FROM event")or die(mysql_error());
					$nomor = 1;
					while($data = mysql_fetch_array($query_mysql)){
						?>
						<tr style = "background-color : #FFEAD8;">
							<td><?php echo $data['nama_produk']; ?></td>			
							<td><?php echo $data['jenis_produk']; ?></td>
							<td><?php echo $data['harga_produk']; ?></td>
							<td><?php echo $data['deskripsi']; ?></td>
							<td>
							<a class="edit" href="edit_produk.php?id=<?php echo $data['id_produk']; ?>" >Edit</a> |
							<a class="hapus" href="hapus_produk.php?id=<?php echo $data['id_produk']; ?>" >Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</table>   
			</section>
			
			<footer>
				&copy; 2017 Kenyang.com
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
