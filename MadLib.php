<html>
    <head>
     <title>Mad-Lib-Functions</title>
    </head>
    <body>
    
	<form method="post">
		Singular noun:
		<input type="text" name="noun">
		<br>
		Verb         :
		<input type="text" name="verb">
		<br>
		Color      :
		<input type="text" name="color">
		<br>
		Distance Unit:
		<input type="text" name="unit">
		<br>
		<input type="submit" value="Submit">
	</form>
	<a href="madlib.php">Reset</a>
	<br><br>

<?php


if (isset($_POST['noun'])) {
	function generateStory($noun, $verb, $color, $unit)	{
		
			if (strlen(($_POST["noun"]))>0) {
				$story = "\nThe ${noun}s are lovely, ${color} and deep.\nBut I have promises to keep,\nAnd ${unit}s to go before I ${verb},\nAnd ${unit}s to go before I ${verb}.\n";
				return $story;
			} else {
				echo "Please fill out the form first.";
			};
	};

	echo generateStory($_POST['noun'],$_POST['verb'],$_POST['color'],$_POST['unit']);
	} else {
		echo "Please fill out the form.";
	}

     ?>
    </body?>
</html>
