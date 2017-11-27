<?php

// returns a random element from the array
function pick_random($array) {
  return $array[array_rand($array)];
}

$subjects = array('Elvis', 'your mama', 'dog', 'programmer', 'clown');
$verbs = array('needs', 'wants', 'ate', 'built', 'destroyed');
$quantities = array('a', 'two', 'three', 'two dozen', 'fifty', 'some');
$adjectives = array('new', 'large', 'cute', 'hot', 'wicked cool', 'scary', 'dumb');
$objects = array('website', 'bath', 'pizza', 'kitten', 'bicycle');

$subject = pick_random($subjects);
if($subject != 'Elvis' && $subject != 'your mama') {
  $subject_quantity = pick_random($quantities);
  $subject_adjective = pick_random($adjectives);
  if($subject_quantity != 'a') { $subject = $subject . "s"; }
  $subject = $subject_quantity . " " . $subject_adjective . " " . $subject;
}

$verb = pick_random($verbs);
$quantity = pick_random($quantities);
$adjective = pick_random($adjectives);
$object = pick_random($objects);

// pluralization
if($quantity != 'a') { $object = $object . "s"; }

$sentence = $subject . " " . $verb . " " . $quantity . " ". $adjective . " " . $object . '.';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Sentence</title>
  	<style type="text/css">
    body {
    	margin: 5px;
      padding: 0;
      background: #EEE;
      font-size: 100px;
      font-weight: bold;
      text-align: left;
      text-transform: uppercase;
    }
    p, a {
      color: blue;
    }
  	</style>
  </head>
  <body>
    <p><a href=""><?php echo ucfirst($sentence); ?></a></p>
  </body>
</html>
