<?php
// 配列
$team1 = ['一郎', '二郎', '三郎'];

// 連想配列
$team2 = ['name' => '一郎', 'age' => 19];
$team3 = ['name' => '二郎', 'age' => 17];
$team4 = ['name' => '三郎', 'age' => 14];

$team = [$team2, $team3, $team4];
// 配列の中身全体は、print_r(配列名)で指定。
print_r($team);
echo '<br>';

// 配列(連想配列)の中身は、配列名[インデックス番号]で指定。
echo $team1[0].'<br>';
echo $team1[1].'<br>';
echo $team1[2].'<br>';

$team1[0] = '一兄';
echo $team1[0].'<br>';

$countArray = count($team1);
echo $countArray.'<br>';

$colors = [];
$colors[] = '赤';
$colors[] = '青';
$colors[] = '黄';
$colors[] = '紫';
print_r($colors);
echo '<br>';

$colors[4] = 'ピンク';
print_r($colors);
echo '<br>';

// 文字列から配列を作る
# explode(つなげ方, 文字列(文字列が格納された変数名));
$data = 'さまとき, じゅーと, りおう';
$delimiter = ',';
$nameList = explode($delimiter, $data);
print_r($nameList);
echo '<br>';

// 配列から文字列を作る
# implode(つなげ方, 配列が格納されている変数名);
$nameList2 = implode('、', $nameList);
print_r($nameList2);
echo '<br>';

// 配列を定数にする
define('RANK', ['松', '竹', '梅']);
echo RANK[0];
echo '<br>';
echo RANK[1];
echo '<br>';
echo RANK[2];
echo '<br>';
?>