<?php
//$Id: balance_ometer.tpl.php,v 1.3 2010/12/08 11:43:18 matslats Exp $

/*
 * Balance_limits.tpl.php
 * Themed display the user's balance limits for a given currency
 * Some variables can be set at the start
 *
 * variables:
 *
 * $account
 * $min = array($cid => -100...);
 * $max = array($cid => 100...);
 * $balance = array($cid => 43...);
 * $currcode = unique currency identifier
 */

//it's a bit tricky to skew the colors if zero isn't in the center.
if (abs($min) == $max) {
  $colors = array('FF0000', 'FFFFFF', 'FF0000');
}
elseif ($min == 0) {
  $colors = array('FFFFFF', '0071BC');//this is the link color in sky_seldulac theme
}
else {
  print t("Min: @min", array('@min' => $min));
  print '<br />';
  print t("Max: @max", array('@max' => $max));
  return;
}
//or to skew the needle!
$xlabel = theme('worth_item', array('quantity' => $min, 'currcode' => $currcode)) ."|".
  theme('worth_item', array('quantity' => $max, 'currcode' => $currcode));

$params = array(
  'cht' => 'gom',
  'chs' => '200x110',
  'chxt' => 'x,y',
  'chds' => $min .','. $max,
  //'chxr' => '1,'.$account->balances[$cid]['limit_min'] .','. $account->balances[$cid]['limit_max'] .'25',
  'chd' => 't:'.$balance,
  'chxl' => '1:|'. strip_tags($xlabel),
  'chco' => implode(',', $colors),
  'chl' => theme('worth_item', array('quantity' => $balance, 'currcode' => $currcode)),
  //'chtt' => currency_load($currcode)->info['currcode'],
  'chxs' => '0,000000|1,000000',
  'chf' => 'bg,s,FFFFFFFF'
);

//cleaner than http_build_query
foreach ($params as $key => $val) {
  $args[] = $key .'='. strip_tags($val);
}
?>
<img src = "http://chart.apis.google.com/chart?<?php print implode('&', $args); ?>">
