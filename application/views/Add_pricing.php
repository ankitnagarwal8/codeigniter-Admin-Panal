<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="head">Add pricing</div>
	<div>
		<form method="post" action="<?= base_url('Pricing_admin/add_pricing_data2')?>" enctype="multipart/form-data">
			<input type="text" name="user" placeholder="user"><br>
			<input type="number" name="pricing" placeholder="pricing"><br>
			<input type="text" name="s_frist" placeholder="s_frist"><br>
			<input type="text" name="s_second" placeholder="s_second"><br>
			<input type="text" name="s_third" placeholder="s_third"><br>
			<input type="text" name="s_forth" placeholder="s_forth"><br>
			<input type="text" name="s_fifth" placeholder="s_fifth"><br>
			<input type="text" name="button" placeholder="button"><br>
			<input type="submit" name="">


		</form>
	</div>

</body>
</html>