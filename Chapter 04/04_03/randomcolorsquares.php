<?php
  $colors = array('red', 'green', 'blue', 'black', 'white');
  $color_count = count($colors);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Colors</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>;
    }
    .area {
      float: left;
      margin: 0; padding: 0;
      width: 100px; height: 100px;
    }
    #area1 {
      background: <?php echo $colors[rand(0,$color_count-1)]; ?>;
    }
  	</style>
  </head>
  <body>
    <div class="area" id="area1"></div>
    <div class="area" id="area2" style="background: <?php echo $colors[rand(0,$color_count-1)]; ?>;"></div>
    <?php
    $squares = 100;
    for($i=0; $i < $squares; $i++) {
      echo "<div class=\"area\" id=\"area2\" style=\"background: {$colors[rand(0,$color_count-1)]}\"></div>";
    }
    ?>
  </body>
</html>
