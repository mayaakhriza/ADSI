<!DOCTYPE html>
<html>
	<head>
		<title>Event Mister Geprek</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Event Admin</h1>
				<nav>
					<ul>
						<li><a href="index_admin.php">Home</a></li>
						<li><a href="produk_admin.php">Produk</a></li>
						<li><a href="event_admin.php" class="current">Event</a></li>
						<li><a href="infoperusahaan_admin.php">Informasi Perusahaan</a></li>
						<li><a href="kontakperusahaan_admin.php">Kontak Perusahaan</a></li>
						<li><a href="pemesanan_admin.php">Pemesanan</a></li>
						<li><a href="logout.php">Log Out</a></li
					</ul>
				</nav>
			</header>
			<section class="courses">
				<br>
				<font face = "Open Sans" size = "5px" color = "#205D76"><center>Event Mister Geprek</center></font>
				<p align = "right"><a href="input_event.php">+ TAMBAH DATA</a></p>
			
				<table border="1" class="table" width=100%>
					
					<tr style="background-color: #FFAAA8;">
						<th><font color=white size="2px">Judul Event</font></th>
						<th><font color=white size="2px">Jenis Event</font></th>
						<th><font color=white size="2px">Deskripsi Event</font></th>
						<th><font color=white size="2px">Tanggal Mulai</font></th>
						<th><font color=white size="2px">Tanggal Berakhir</font></th>
						<th><font color=white size="2px">Edit</font></th>
						
					</tr>
					
					
					<?php 
					
					include ('koneksi.php');
					
					$result = mysqli_query($mysqli, "SELECT * FROM event_admin ORDER BY id DESC") or die (mysql_error());

					while($data = mysqli_fetch_array($result)){
						?>
						<tr style = "background-color : #FFEAD8;">
							<td><?php echo $data['judul_event']; ?></td>			
							<td><?php echo $data['jenis_event']; ?></td>
							<td><?php echo $data['deskripsi_event']; ?></td>
							<td><?php echo $data['tanggal_mulai']; ?></td>
							<td><?php echo $data['tanggal_berakhir']; ?></td>
							<td>
							<a class="edit" href="edit_event.php?id=<?php echo $data['id']; ?>" >Edit</a> |
							<a class="hapus" href="delete_event.php?id=<?php echo $data['id']; ?>" >Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</table>   
			</section>
			
		</div><!-- .wrapper -->
	</body>
</html>
