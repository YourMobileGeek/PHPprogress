<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is This a Leap Year?</title>
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
      <h1>Is This a Leap Year?</h1>
      
      <p>
        <?php date_default_timezone_set("America/New_York"); ?>

        <?php
          $year = date("Y");
          if($year % 4 > 0) {
            $is_leap_year = false;    // 2015
          } elseif($year % 100 > 0) {
            $is_leap_year = true;     // 1984
          } elseif($year % 400 > 0) {
            $is_leap_year = false;    // 2100
          } else {
            $is_leap_year = true;     // 2000
          }
        
          if($is_leap_year) {
            echo "Yes, {$year} is a leap year.";
          } else {
            echo "No, {$year} is not a leap year.";
          }
        ?>
      </p>
      
    </div>
    
  </body>
</html>
