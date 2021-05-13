<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Archive Labels</title>
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
</head>
<body>
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12">
				<h1>Label Creator</h1>
				<p>Script to create 6x4 labels for organising a photography archive.</p>
			</div>
			<div class="small-12">
				
				<form method="POST" action="label.php">
					<input placeholder="Enter Title" name="project" type="text"/>
					<input value="<?php echo date("Y-m-d") ?>" name="date" type="date"/>
					<input type="submit"/>
				</form>

			</div>
		</div>
	</div>
</body>
</html>