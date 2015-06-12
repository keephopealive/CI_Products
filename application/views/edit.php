<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<form action="/products/update" method="post">
		<input type='hidden' name='id' value="<?= $id ?>">
		<input type='text' name='name' value="<?= $name ?>">
		<input type='text' name='description' value="<?= $description ?>">
		<input type='submit' value="Update!">
	</form>
	<a href="/">Back</a>
</body>
</html>