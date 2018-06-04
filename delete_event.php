<?php

if(isset($_GET['id'])){
	
// include database connection file
include('koneksi.php');
 
// Get id from URL to delete that user
$id = $_GET['id'];

$cek = mysqli_query("SELECT id FROM event_admin WHERE id = '$id'") or die (mysql_error());
 
if(mysql_num_rows($cek) == 0){
	echo '<script>window.history.back()</script>';
}else{
// Delete user row from table based on given id
$del = mysqli_query($mysqli, "DELETE FROM event_admin WHERE id='$id'");

if($del){
	echo 'Event berhasil dihapus!';
	echo '<a href="event_admin.php">Kembali</a>';
}else{
	echo 'Gaga menghapus event!';
	echo '<a href = "event_admin.php">Kembali</a>';
}
}
}
?>
