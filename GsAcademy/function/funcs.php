<?php

// XSS対応関数
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// Google Map を住所から自動生成する関数
function gmap($address) {
  googlemap_init('google_map', $address);
}

 ?>
