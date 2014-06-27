<?php
	
	require_once 'signature-to-image.php';

	if(!empty($_POST)){

		$json = $_POST['output']; // From Signature Pad
		$img = sigJsonToImage($json);

		imagepng($img, './sig/signature.png');

	}

?>
<!doctype html>
<html lang="jp">
<head>
	<meta charset="utf-8">
	<title>The HTML5 Herald</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link href="css/jquery.signaturepad.css" rel="stylesheet">
	<link href="css/demo.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</head>

<body>
	<div role="main">
		<form method="post" action="" class="sigPad">
			<?php if(!empty($_POST)): ?>
				<p>Saved</p>
			<?php endif; ?>
			<label for="name">Print your name</label>
			<input type="text" name="name" id="name" class="name">
			<p class="drawItDesc">Draw your signature</p>
			<ul class="sigNav">
				<li class="drawIt"><a href="#draw-it" >Draw It</a></li>
				<li class="clearButton"><a href="#clear">Clear</a></li>
			</ul>
			<div class="sig sigWrapper">
				<div class="typed"></div>
				<canvas class="pad" width="198" height="55"></canvas>
				<input type="hidden" name="output" class="output">
			</div>
			<button type="submit">I accept the terms of this agreement.</button>
		</form>

		<script src="js/jquery.signaturepad.js"></script>
		<script>
		$(document).ready(function() {
			$('.sigPad').signaturePad({drawOnly:true});
		});
		</script>
		<script src="js/json2.min.js"></script>
	<div>
</body>
</html>