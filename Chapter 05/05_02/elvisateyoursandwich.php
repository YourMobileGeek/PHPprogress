<?php

$fragments = array(
  'ate your sandwich',
  'wrote you a song',
  'called your cellphone',
  'borrowed your comb'
);

$i = array_rand($fragments);

$sentence = 'Elvis ' . $fragments[$i] . '.';

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
