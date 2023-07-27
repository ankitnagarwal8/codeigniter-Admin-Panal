<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="head">update pricing</div>
	<div>
		<?php
		foreach($results as $result):
		?>
		<form method="post" action="<?= base_url('Pricing_admin/update_pricing_data2/'.$result['id'])?>" enctype="multipart/form-data">
			<input type="text" name="user" placeholder="user" value="<?php echo $result['user']; ?>"><br>
			<input type="text" name="s_frist" placeholder="s_frist" value="<?php echo $result['s_frist']; ?>"><br>
			<input type="text" name="s_second" placeholder="s_second" value="<?php echo $result['s_second']; ?>"><br>
			<input type="text" name="s_third" placeholder="s_third" value="<?php echo $result['s_third']; ?>"><br>
			<input type="text" name="s_forth" placeholder="s_forth" value="<?php echo $result['s_forth']; ?>"><br>
			<input type="text" name="s_fifth" placeholder="s_fifth" value="<?php echo $result['s_fifth']; ?>"><br>
			<input type="text" name="button" placeholder="button" value="<?php echo $result['button']; ?>"><br>
			<input type="submit" name="">


		</form>
	<?php endforeach; ?>
	</div>	
</body>
</html>