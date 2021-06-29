<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Upload image</title>
</head>
<body>
<form action="file-upload" method="post" enctype="multipart/form-data">
	@csrf
	<div style="margin:20px;">
		<input type="file" name="image" id="image"><br /><br />
		<button type="submit" class="btn btn-primary btn-sm">Submit</button>
	</div>
</form>
</body>
</html>