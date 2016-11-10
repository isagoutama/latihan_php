<?php

	if (isset($_FILES['nama_file'])) {
		//echo "<pre>".print_r($_FILES['nama_file'],1)."</pre>";
		$nama_file = $_FILES['nama_file']['name'];
		$temp_file = $_FILES['nama_file']['tmp_name'];

		$dir = "upload";
		$ext = ['image/png','image/jpeg','image/jpg','image/gif'];

		if (in_array($_FILES['nama_file']['type'],$ext)) {
			$up = move_uploaded_file($temp_file,$dir."/".$nama_file);
			echo "file sudah di amankan, tapi bohong";
			if ($up) {
				echo "Berhasil Berhasil Hore We DId it";
				echo "<img src='upload/".$nama_file."'>";
			}else {
				echo "Gagal";
			}
		}else{
			echo "Hanya boleh gambar doang";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>File</td>
				<td><input type="file" name="nama_file"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Upload</button></td>
			</tr>
		</table>
		
	</form>

</body>
</html>