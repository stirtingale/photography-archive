<?php 
// DEBUG
$debug = true;
if($debug){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Label</title>
	<!-- Compressed CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
	<style>
		body {
			text-transform: uppercase;
			background: #fff;
			background-image: linear-gradient(#0000 11px, #dcdcc8cc 12px, #0000 12px), linear-gradient(
			90deg
			, #0000 11px, #dcdcc8cc 12px, #0000 12px);
			background-size: 100% 12px, 12px 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height:100vh;
		}
		section {
			padding:1cm;
			background: #fff;
			border:1px solid #dcdcc8cc;
			width:4in;
			height:6in;
			margin:auto;
			position: relative;
		}
		p {
			margin:0;
			line-height: 1;
		}
		.cell {
			font-size:0.5cm;
			white-space: nowrap;
		}
		.title {
			font-weight: bold;
		}
		.qr img {
			position: absolute;
			bottom:0;
			right:0;
			width:50%;
			height:auto;
		}
		@media print {    
			body {
				background:transparent;
				display: block;
				align-items: initial;
				justify-content: initial;
				min-height:initial;
			}
		    section {
				background: transparent;
		        border:none!important;
		    }
		}
	</style>
</head>
<body>
	<section>

	<div class="grid-x grid-margin-x grid-margin-y ">
		<div class="title cell small-5">
			<p>PROJECT NAME</p>
		</div>
		<div class="cell small-7 text-right">
			<p><?php echo $_POST['project'];?></p>
		</div>
		<div class="title cell small-5">
			<p>REFERENCE</p>
		</div>
		<div class="cell small-7 text-right">
			<p><?php echo $_POST['date'];?></p>
		</div>
	</div>

	<div class="qr">
		<?php 
		$text = 'label!';
		?>
		<img src="qr.php?id='<?php echo $text ?>'" alt="QR">	
	</div>

	</section>

</body>
</html>