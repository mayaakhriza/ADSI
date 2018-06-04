
<html>
<head>
	<title>Add Event</title>
</head>
 
<body>
	<a href="index_admin.php">Kembali ke Home</a>
	<br/><br/>
 
	<form action="input-proses.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Judul Event</td>
				<td><input type="text" name="judul_event"></td>
			</tr>
			<tr> 
				<td>Jenis Event</td>
				<td><input type="text" name="jenis_event"></td>
			</tr>
			<tr> 
				<td>Deskripsi Event</td>
				<td><input type="text" name="deskripsi_event"></td>
			</tr>
			<tr> 
				<td>Tanggal Mulai</td>
				<td><input type="text" name="tanggal_mulai"></td>
			</tr>
				<tr> 
				<td>Tanggal Berakhir</td>
				<td><input type="text" name="tanggal_berakhir"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah Event"></td>
			</tr>
		</table>
	</form>
	
	
</body>
</html>
