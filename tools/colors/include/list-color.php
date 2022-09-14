<?php

$list_orange = array(
  "#663200" => "brown",
  "#835300" => "brown_light",
  "#c2520a" => "orange_dark",
  "#dc661e" => "orange_medium",
  "#f45a1e" => "orange",
  "#f37020" => "orange_light_1",
  "#f6821f" => "orange_light_2",
  "#ff9f0d" => "orange_light_3",
  "#ffbe00" => "yellow",
);

$list_blue = array(
  "#012346" => "blue_dark_3",
  "#01337a" => "blue_dark_2",
  "#014083" => "blue_dark_1",
  "#00529b" => "blue_medium",
  "#1670d0" => "blue",
  "#347ab6" => "blue_light",
  "#00a4a6" => "green_blue_dark",
  "#aadcdb" => "green_blue_light",
  "#b9e986" => "green_light",
);

$list_gray = array(
  "#414141" => "gray_dark",
  "#685546" => "brown_gray_dark",
  "#666666" => "gray",
  "#8d847b" => "gray_brown",
  "#919191" => "gray_light_1",
  "#cccccc" => "gray_light_2",
  "#f5f0dc" => "gray_yellow",
  "#f7f4eb" => "gray_yellow_light",
  "#fffff5" => "white_yellow",
);

foreach ($list_orange as $key_color => $value_name) {
  $list_color[] = $key_color;
}

foreach ($list_blue as $key_color => $value_name) {
  $list_color[] = $key_color;
}

foreach ($list_gray as $key_color => $value_name) {
  $list_color[] = $key_color;
}

// echo "<pre>";
//   print_r($list_color);
// echo "</pre>";

?>
