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

				<?php if ($_GET['name'] == NULL): ?>

					<h1>Welcome Senpai</h1>	

					<form>
						<label for="name">Senpai what is your name?</label>
						<input type="text" name="name">
						<input type="submit">
					</form>

				<?php 

					else;
					$new_name = $_GET[]'name';
					$half_name_length = (int) (mb_strlen($new_name) / 2);
					$remaining_chars = mb_strlen($new_name) - $half_name_length;
					$name_end = mb_substr($new_name, $half_name_length, $remaining_chars);
					$name_beginning = mb_substr($new_name, 0, $half_name_length);
					$botname = $name_end . $name_beginning;

				?>

					<h1>Welcome <?php print($_GET['name']) ?>-chan. <br> My name is <?php $botname ?></h1>

				<?php endif; ?>

			</div>

	</div>

</body>

</html>