<?php

// delete a value from an array using unset
// function array_delete($value, $array) {
//   $key = array_search($value, $array);
//   if($key !== false) {
//     unset($array[$key]);
//   }
//   // unset leaves the index in place
//   // array_values is like "reindexing"
//   return array_values($array);
// }

// delete a value from an array using array_splice
// function array_delete($value, $array) {
//   $key = array_search($value, $array);
//   $discarded = array_splice($array, $key, 1);
//   return $array;
// }

// delete a value from an array using array_diff
function array_delete($value, $array) {
  // make sure 2nd argument is an array
  return array_diff($array, array($value));
}
  
$colors = array('red', 'green', 'blue', 'black', 'white');
$color_count = count($colors);

echo "--------<br />";
echo "Original colors:<br />";
echo "<pre>";
print_r($colors);
echo "</pre>";

// Pick background color
$bg_color = $colors[rand(0,$color_count-1)];
echo "Background: {$bg_color}<br />";

// Need to ensure text color is not same as background color
$text_colors = array_delete($bg_color, $colors);

echo "--------<br />";
echo "Text colors:<br />";
echo "<pre>";
print_r($text_colors);
echo "</pre>";

// Pick text color
$text_color_count = count($text_colors);
$text_color = $colors[rand(0,$text_color_count-1)];
echo "Text color: {$text_color}<br />";

  
?>