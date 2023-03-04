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

<!--	<p>Best food is: <?= $_POST['noun']; ?> </p>
		<p>Best color is: <?= $_POST['verb']; ?> </p> -->

<?php

function generateStory($singular_noun,$verb,$color,$distance_unit){

      $story = "\nThe ${singular_noun}s are lovely, ${color} and deep.\nBut I have promises to keep,\nAnd ${distance_unit}s to go before I ${verb},\nAnd ${distance_unit}s to go before I ${verb}.\n";
      return $story;
};

echo "<pre>";
echo "\n";
echo "</pre>";

	if (isset( $_POST['noun'] )) {
		echo generateStory($_POST['noun'],$_POST['verb'],$_POST['color'],$_POST['unit']);
	} else {
		echo "Fill out the form first.";
	}

     ?>
    </body?>
</html>
