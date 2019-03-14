<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivo</title>
</head>
<body>
	<center>
		<h3>Upload File Multiple &lt;form&gt;</h3>
		<form enctype="multipart/form-data" action="upload_file.php"  method="POST">
			<input name="uploaded_file[]" type="file" multiple/>
			<input type="submit" value="Subir archivo" />
		</form>
		
	</center>
</body>
</html>