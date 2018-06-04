<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		
		//include database connection file
		include('koneksi.php');
		
		$judul = $_POST['judul_event'];
		$jenis = $_POST['jenis_event'];
		$deskripsi = $_POST['deskripsi_event'];
		$awal = $_POST['tanggal_mulai'];
		$akhir = $_POST['tanggal_berakhir'];
		
		
		// Insert user data into table
		$input = mysqli_query($mysqli, "INSERT INTO event_admin VALUES(NULL,'$judul','$jenis','$deskripsi','$awal','$akhir')") or die (mysql_error());
		
		 if($input){
  
  echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="event_admin.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }else{
  
  echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="event_admin.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
	?>
