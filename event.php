<!DOCTYPE html>
<html>
	<head>
		<title>Event Mister Geprek</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Perpustakaan</h1>
				<nav>
					<ul>
						<li><a href="index.php" >Home</a></li>
						<li><a href="produk.php">Produk</a></li>
						<li><a href="event.php"class="current">Event</a></li>
						<li><a href="infoperusahaan.php">Informasi Perusahaan</a></li>
						<li><a href="kontakperusahaan.php">Kontak Perusahaan</a></li>
						<li><a href="pemesanan.php">Pemesanan</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<?php 
					
					include "koneksi.php";
					$result = mysqli_query($mysqli, "SELECT * FROM event_admin ORDER BY id DESC");

					while($data = mysqli_fetch_array($result)){
						?>
				<article>
					<figure>
						<img src="images/eventgeprek1.jpg" alt="eventgeprek1" />
						<figcaption><?php echo $data['jenis_event']; ?></figcaption>
					</figure>
					<hgroup>
						<h2><?php echo $data['judul_event']; ?></h2>
						<h3><?php echo $data['deskripsi_event'];?></h3>
					</hgroup>
				</article>    
				<?php } ?>
				
				<!--<article>
					<figure>
						<img src="images/eventgeprek2.jpg" alt="eventgeprek2" />
						<figcaption>Event</figcaption>
					</figure>
					<hgroup>
						<h2>Event Akhir Tahun </h2>
						<h3>!Yay & Atu suka berMUSIK, NYANYI atau CIPTAIN LAGU ?<br>Kuy Ikutan #MisterGeprekJingleCompetition2017  . . UANG TUNAI 5 JUUTAAA..menanti kamu buat yang mengirimkan karya Terbaik. . .<a href = "">Load More ..</a></h3>
					</hgroup>
				</article>   --> 
			</section>
			
			<footer>
				&copy; 2017 Kenyang.com
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
