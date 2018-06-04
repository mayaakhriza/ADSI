<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="style/index.css" rel="stylesheet">
  </head>
  <body>
  <ul>
						<li><a href="index.php"class="current">Home</a></li>
						<li><a href="produk.php">Produk</a></li>
						<li><a href="event.php">Event</a></li>
						<li><a href="infoperusahaan.php">Informasi Perusahaan</a></li>
						<li><a href="kontakperusahaan.php">Kontak Perusahaan</a></li>
						<li><a href="pemesanan.php">Pemesanan</a></li>
      <?php
        if(!isset($_SESSION['username']))
          echo "<li> <a class=\"active\" href='login.php'>Login</a></li>";
        else {
          echo "<li> <a href='logout.php'>Logout</a></li>";
          echo "<li> <a href='index.php?p=admin'>Admin</a></li>";
        }
      ?>
      </ul>
