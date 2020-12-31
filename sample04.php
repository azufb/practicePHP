<?php
$size = 'M';
$price = 1200;

echo $size, 'サイズ、';
echo $price, '円。<br>';

$kokugo = 67;
$sansu = 72;
$rika = 85;

$goukei = $kokugo + $sansu + $rika;
$heikin = $goukei/3;
echo '3教科の合計得点は、', $goukei, '点です！<br>';
echo '3教科の平均得点は、', $heikin, '点です！<br>';
echo 'お疲れ様でしたー！！<br>';

const TAX = 0.08;
$price2 = 1250 * (1+TAX);
echo $price2;
?>