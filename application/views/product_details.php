



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table cellspacing="0" border="1px solid black">
		<tr>
			<th>id</th>
			<th>title</th>
			<th>description</th>
			<th>price</th>
			<th>discountPercentage</th>
			<th>rating</th>
			<th>stock</th>
			<th>brand</th>
			<th>category</th>
			<th>thumbnail</th>
			<th>images</th>
		</tr>
		<tr>
			<?php

			foreach($obj->products as $product):

			?> 
			<td><?php echo $product; ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		
		<?php  endforeach; ?>
		</tr>
	</table>

</body>
</html>