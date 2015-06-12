<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	<h1>List of Products</h1>
	<div>
		<form action="/products/create" method="post">
			<input name="name"/>	
			<input name="description"/>	
			<input type="submit">
		</form>
	</div>
<?php 
	foreach($products as $product)
	{
?>		<div>
			<h3>Name: <?= $product['name']?></h3>
			<p>Description: <?= $product['description']?></p>
			<a href="/products/<?= $product['id'] ?>/delete"><button>DELETE</button></a>
			<a href="/products/<?= $product['id'] ?>/edit"><button>EDIT</button></a>
		</div>
<?php 		
	}
?>
</body>
</html>