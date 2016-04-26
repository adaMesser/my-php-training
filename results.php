<?php

function get_dice_results($dice_type, $count) {
  $results = array();
  for($i = 0; $i < $count; $i++) {
    $results[] = rand(1, $dice_type);
  }
  return $results;
}

 function filter_wrapper($dice_type, $count, $trigger,$comparison_sign, $value) {
   $result_tmp = get_dice_results($dice_type, $count);

   switch ($comparison_sign){
     case '<':
       foreach ($result_tmp as $res_val){
         if($res_val<$value){
           $results[]=$res_val;
         }
       }
       break;
     case '<=':
       foreach ($result_tmp as $res_val){
         if($res_val<=$value){
           $results[]=$res_val;
         }
       }
        break;
     case '>';
       foreach ($result_tmp as $res_val){
         if($res_val>$value){
           $results[]=$res_val;
         }
       }
       break;
     case '>=';
       foreach ($result_tmp as $res_val){
         if($res_val>=$value){
           $results[]=$res_val;
         }
       }
       break;
     case '=';
       foreach ($result_tmp as $res_val){
         if($res_val==$value){
           $results[]=$res_val;
         }
       }
       break;
     default;
       $results=$result_tmp;
       break;
   }

   if($trigger == 'asc') {
     sort($results);
     return $results;
   }
   elseif($trigger == 'desc') {
     rsort($results);
     return $results;
   } else{
     return $results;
   }
 }

function parser($command){
  $arr = explode(' ', $command);
  if($arr[0] == 'throw'){
    $count = $arr[1];
  }else{
    echo 'error throw';
  }
  if(strpos($arr[2],'d')==0){
    $dice_type = substr($arr[2],1);
  }else{
    echo 'error ';
  }

  if($arr[3]=='filter'){
    $comparison_sign = $arr[4];
    $value = $arr[5];
  }

  if($arr[3]=='sort'){
    $trigger = $arr[4];
  }else if($arr[4]=='sort'){
    $trigger = $arr[5];
  }else if($arr[5]=='sort'){
    $trigger = $arr[6];
  }else if($arr[6]=='sort'){
    $trigger = $arr[7];
  }

  return filter_wrapper($dice_type, $count, $trigger,$comparison_sign, $value);
}