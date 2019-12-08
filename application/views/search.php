<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
 
			<?php foreach($products as $product) { ?>
				<tr>
					<td><?php echo $product->judul_lagu ?></td>
				</tr>
			<?php } ?>
 
 
	</table>
</body>
</html>