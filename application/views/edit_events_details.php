<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<div>
		<div>edit events details</div>
		<?php foreach($results as $result): ?>
		<form method="post" action="<?= base_url('events_admin/Edit_Part_second_edit/'.$result['id']); ?>" enctype="multipart/form-data">
			<input type="text" name="heading" placeholder="heading" value="<?php echo $result['heading']; ?>"><br>
			<input type="datetime-local" name="timing_details" placeholder="timing_details" value="<?php echo $result['timing_details']; ?>"><br>
			<input type="text" name="details" placeholder="details" value="<?php echo $result['details']; ?>"><br>
			<input type="file" name="image" placeholder="image"><br>
			<input type="submit" name="submit">
		</form>
		<?php endforeach; ?>
	</div>


</body>
</html>