<pre>
<?php
// 指定した値を1つだけ表示する時に使えるのは、print()。
$msg = 'ハローグッバイ！';
print $msg.'<br>';

$who = '田中';
$age = 35;
print $who. 'さん'. $age. '歳。<br>';
print $msg. '<br>';

// var_dump()を使うと、論理値や、nullを出力できる。デバッグ時に活躍！
$colors = array('red', 'blue', 'green');
$nl;
var_dump($msg);
var_dump($colors);
var_dump($nl);
?>
</pre>