<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
<tr>
	<td>id</td>
	<td>name</td>
	<td>ema</td>
	<td>f</td>
	<td>e</td>
</tr>
<?php foreach ($user as $key => $val): ?>
	<tr>
		<td><?= $val['user_id']?></td>
		<td><?= $val['user_name'] ?></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<?php endforeach ?>
			

</table>
	
</body>
</html>