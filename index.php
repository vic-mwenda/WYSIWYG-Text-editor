<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<style>
		#container {
			width: 1000px;
			margin: 20px auto;
		}
		.ck-editor__editable[role="textbox"] {
			min-height: 200px;
		}
		.ck-content .image {
			max-width: 80%;
			margin: 20px auto;
		}
	</style>

</head>
<body>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<form action="editor-action.php" method="post">
<div id="container">
	<label for="editor">Text Editor</label>
	<textarea id="editor" name="editor-content">
	</textarea>
	<div class="d-flex justify-content-center">
	<button type="submit" class="btn btn-primary" name="save">Save</button>
	</div>
</div>

</form>
<script>
	CKEDITOR.replace('editor');
</script>
</body>
</html>
