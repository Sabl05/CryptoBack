<?php
require 'phpQuery.php';

$url = "https://www.coingecko.com/en";
$file = file_get_contents($url);

function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '<pre>';
}

$arr = array();
$doc = phpQuery::newDocument($file);
foreach ($doc->find('table tbody tr') as $value) {
    $value = pq($value);
    $img = $value->find('.coin-name .tw-flex .coin-icon img')->attr('src');
    $name = $value->find('.coin-name .tw-flex .center .tw-items-center')->html();
    $arr[$name] = $img;
}
//print_r($arr);


$url = "https://www.coingecko.com/en";
$file = file_get_contents($url);
$doc = phpQuery::newDocument($file);
$page = $doc->find('.coingecko-table .position-relative')->html();

echo $page;
 ?>
 <?php
 $url = "https://dropsearn.com/";
 $file = file_get_contents($url);
 $doc = phpQuery::newDocument($file);
 $count = 0;

 foreach ($doc->find('.activities-block .container .table-container .table-rows a') as $value) {
   $value = pq($value);
   $count++;
   $event = $value->find('.image img')->attr('src');
   $name = $value->find('.name .event-name')->text();
   $reward = $value->find('.reward span:eq(2)')->text();
   $reward_pool = $value->find('.reward .muted')->text();
   $activity_type = $value->find('.type')->html();
   $added = $value->find('.added')->text();

  ?>
 <tr>
   <td><?php echo $count; ?></td>
   <td><img style="border-radius: 10px;" src="<?php echo $event; ?>" alt="img"><span style="padding-left: 10px;"><?php echo $name; ?><span></td>
   <td><span class="badge badge-success p-1"><?php echo $reward; ?></span><span class=""><?php echo $reward_pool; ?></span></td>
   <td><?php echo $activity_type; ?></td>
   <td><?php echo $added; ?></td>
 </tr>
 <?php
 }
  ?>
