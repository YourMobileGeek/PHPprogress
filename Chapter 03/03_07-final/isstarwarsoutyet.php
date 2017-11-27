<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is Star Wars Out Yet?</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: #DFCC89;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: #3D2399;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is Star Wars Out Yet?</h1>
      
      <?php date_default_timezone_set("America/New_York"); ?>

      <p>
      <?php
      $star_wars_dates = array(
        1 => '1999-05-19',
        2 => '2002-05-16',
        3 => '2005-05-19',
        4 => '1977-05-25',
        5 => '1980-05-21',
        6 => '1983-05-25',
        7 => '2015-12-18',
        8 => '2017-05-26',
        9 => NULL
      );
      
      if(isset($_GET['episode'])) {
        $episode = intval($_GET['episode']);
      } else {
        $episode = 7;
      }
      $release_date_s = $star_wars_dates[$episode];
      $release_date_t = strtotime($release_date_s); // timestamp
      $release_date_p = strftime("%B %d, %Y", $release_date_t); // pretty string
      
      if(is_null($release_date_s)) {
        echo "No. Episode #{$episode} does not yet have a release date.";
      } elseif(time() >= $release_date_t) {
        echo "Yes! Episode #{$episode} was released on {$release_date_p}.";
      } else {
        echo "Not yet! Episode #{$episode} will be released on {$release_date_p}.";
      }
        
      ?>
    </p>
    <br />
      <form action="" method="get">
        Which Star Wars Episode?<br />
        <select name="episode">
          <?php
          for($i=1; $i <= 9; $i++) {
            echo "<option value=\"{$i}\">#{$i}</option>";
          }
          ?>
        </select>
        <input type="submit" value="Submit" />
      </form>
      
    </div>
    
  </body>
</html>
