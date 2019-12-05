<!DOCTYPE html>
<html>
<head>
	<title>btpn</title>
</head>
<body>

	<h2>profile</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tbl_user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="tex" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?php echo $d['password']; ?>"></td>
				</tr>
                <tr>
					<td>password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>