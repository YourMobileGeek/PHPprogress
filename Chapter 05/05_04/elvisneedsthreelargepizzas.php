<?php

// returns a random element from the array
function pick_random($array) {
  return $array[array_rand($array)];
}

$subjects = array('Elvis', 'Your mama', 'My neighbor\'s dog', 'Some dumb programmer', 'A scary clown');
$verbs = array('needs', 'wants', 'ate', 'built', 'destroyed');
$quantities = array('a', 'two', 'three', 'two dozen', 'fifty');
$adjectives = array('new', 'large', 'cute', 'hot', 'wicked cool');
$objects = array('website', 'bath', 'pizza', 'kitten', 'bicycle');

$subject = pick_random($subjects);
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
    <p><a href=""><?php echo $sentence; ?></a></p>
  </body>
</html>
