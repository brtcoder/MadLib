<html>
    <head>
     <title>Mad-Lib-Functions</title>
    </head>
    <body>
<?php

function generateStory($singular_noun,$verb,$color,$distance_unit){
/*
echo  $singular_noun;// = "Noun";
echo  $verb;// = "Verb";
echo  $color;// = "Color";
*/
      $story = "\nThe ${singular_noun}s are lovely, ${color} and deep.\nBut I have promises to keep,\nAnd ${distance_unit}s to go before I ${verb},\nAnd ${distance_unit}s to go before I ${verb}.\n";
      return $story;//."\n".$singular_noun."\n".$verb."\n".$color;
};
echo generateStory("boot","sit","bronze","yard");
     ?>
    </body?>
</html>
