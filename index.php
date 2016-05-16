<!DOCTYPE html>
<html>
<head>
	<title>Media query test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="gallery clearfix">
		
		<?php for($i = 0; $i < 12; $i++): ?>

			<div class="item">
				<img src="http://placehold.it/500x300" alt="">
			</div>

		<?php endfor; ?>

	</div>

</body>
</html>