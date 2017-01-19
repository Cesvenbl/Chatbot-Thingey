<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>ChanBot</title>
</head>

<body>

	<div class="col-md-4 offset-md-4 rounded">

			<div class="text-center">

				<h1>Welcome Senpai</h1>	

				<?php if ($_GET['name'] == NULL): ?>

				<form>
					<label for="name">Senpai what is your name?</label>
					<input type="text" name="name">
					<input type="submit">
				</form>

			<?php endif ?>

			</div>

	</div>

</body>

</html>