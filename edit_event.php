<html>
<head>	
	<title>Edit Event</title>
</head>
 
<body>
	<a href="index_admin.php">Home</a>
	<br/><br/>
	
	<?php
// Display selected user data based on id
include('koneksi.php');
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$show = mysqli_query($mysqli, "SELECT * FROM event_admin WHERE id='$id'");
$data = mysqli_fetch_assoc($show);
?>
	<form name="update_user" method="post" action="edit_event.php">
		<table border="0">
			<tr> 
				<td>Judul Event</td>
				<td><input type="text" name="judul_event" value=<?php echo $judul;?>></td>
			</tr>
			<tr> 
				<td>Jenis Event</td>
				<td><input type="text" name="jenis_event" value=<?php echo $jenis;?>></td>
			</tr>
			<tr> 
				<td>Deskripsi Event</td>
				<td><input type="text" name="deskripsi_event" value=<?php echo $deskripsi;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Mulai</td>
				<td><input type="text" name="tanggal_mulai" value=<?php echo $awal;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Berakhir</td>
				<td><input type="text" name="tanggal_berakhir" value=<?php echo $akhir;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	// include database connection file
	include('koneksi.php');
	
	$id = $_POST['id'];
	
	$judul = $_POST['judul_event'];
	$jenis = $_POST['jenis_event'];
	$deskripsi = $_POST['deskripsi_event'];
	$awal = $_POST['tanggal_mulai'];
	$akhir = $_POST['tanggal_berakhir'];
		
	// update user data
	$update = mysqli_query($mysqli, "UPDATE event_admin SET judul_event ='$judul',
															jenis_event ='$jenis',
															deskripsi event ='$deskripsi'
															tanggal_mulai = '$awal'
															tanggal_berakhir = '$akhir'
															WHERE id = '$id'") or die (mysql_error());
	
	// Redirect to homepage to display updated user in list
	header("Location: event_admin.php");
}
?>

