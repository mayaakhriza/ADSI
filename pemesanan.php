<!DOCTYPE html>
<html>
	<head>
		<title>Pemesanan</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/background.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/home.jpg);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #800000;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Perpustakaan</h1>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="produk.php">Produk</a></li>
						<li><a href="event.php">Event</a></li>
						<li><a href="infoperusahaan.php">Informasi Perusahaan</a></li>
						<li><a href="kontakperusahaan.php">Kontak Perusahaan</a></li>
						<li><a href="pemesanan.php"class="current">Pemesanan</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<br>
				<font face = "Open Sans" size = "5px" color = "#205D76"><center>Pesan Mister Geprek</center></font>
			
					<center>
					<table class="table" width=50% style="background-color: #FAF8DA">
						<tr>
							<td>Nama</td>
							<td>
								<input type="text" name="id_anggota">
							</td>					
						</tr>	
						<tr width="130px">
							<td>Alamat</td>
							<td><textarea name="alamat" value="alamat" rows="5px"></textarea>					
						</tr>	
						
						<tr width="130px">
								<td>No.Telepon</td>
								<td><input type="text" name="nama"></td>	
								</tr>
								
						<tr width="130px">
								<td>Pesan</td>
								<td><select name="pesan">
									<option>Geprek Original</option>
									<option>Geprek Saos Naga</option>
									<option>Milosaurus</option>
 									</select></td>
								<td>Jumlah </td>
								<td><input type="text" name="jumlah" size ="3px">
						</tr>
						
						<tr>
						<td></td>
						<td><select name="pesan">
									<option>Geprek Original</option>
									<option>Geprek Saos Naga</option>
									<option>Milosaurus</option>
 									</select></td>
								<td>Jumlah </td>
								<td><input type="text" name="jumlah" size ="3px">
						</tr>
						
						<tr>
						<td></td>
						<td><select name="pesan">
									<option>Geprek Original</option>
									<option>Geprek Saos Naga</option>
									<option>Milosaurus</option>
 									</select></td>
								<td>Jumlah </td>
								<td><input type="text" name="jumlah" size ="3px">
						</tr>
						<tr>
							<td colspan=4 align="center"><input type="submit" value="Pesan"></td>
						</tr>	<br>
					</table>
					</center>
					
				</form> 
<br><br>				
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Menu Populer</h2>
					<a href="">Ayam Geprek Original</a>
					<a href="">Millosaurus</a>
				</section>
			</aside>
			<footer>
				&copy; 2017 Kenyang.com
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
