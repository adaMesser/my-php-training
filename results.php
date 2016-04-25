<?php

function get_dice_results($dice_type, $count) {
  $results = array();
  for($i = 0; $i < $count; $i++) {
    $results[] = rand(1, $dice_type);
  }
  return $results;
}

 function filter_wrapper($dice_type, $count, $trigger) {
   $results = get_dice_results($dice_type, $count);
   if($trigger == 1) {
     sort($results);
     return $results;
   }
   elseif($trigger == 2) {
     rsort($results);
     return $results;
   } else{
     return $results;
   }
 }

function parser($command){
  
  return filter_wrapper($dice_type, $count, $trigger);
}