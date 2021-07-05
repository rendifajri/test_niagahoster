<?php
function ren_number_format($val){
   $res = number_format($val,0,',','.');
   return $res;
}
function ren_split_number($val){
   $res = explode('.', $val, 2);
   return $res;
}
?>