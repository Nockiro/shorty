<?php
require '../shorty.php';
require '../config.php';


if (isset($_REQUEST['url'])) {
	$shorty = new Shorty($hostname, $connection);

	$shorty->set_chars($chars);
	$shorty->set_salt($salt);
	$shorty->set_padding($padding);

	$shorty->showURL();
}
?>

<html>
	<head>		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body style="margin: 8px;">
		<form action="" method="post">
		  <div class="form-group">
			<label>URL to shorten *</label> 
			<textarea class="form-control" name="url" id="url" placeholder="https://www.google.com" required="required"></textarea>
		  </div>

		  <div class="form-group">
			<input type="submit" class="btn btn-primary" name="btn_genLink" value="Generate link">
		  </div>
		</form>
	</body>
</html>