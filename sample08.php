<?php
// ダブルクウォートで囲まれた文字列
$theSize = 'M';
$thePrice = 1200;
echo "$theSize サイズ、$thePrice 円。<br>";
// ↑カッコがない分、変数と間を開ける必要があるため、表示したとき、前後にスペースが入る。
echo "{$theSize}サイズ、{$thePrice}円。<br>";

// シングルクウォートで囲まれた文字列
// シングルクウォートには、変数を含めることはできない。ピリオドなどで区切り、文字列だけを囲う。
echo $theSize.'サイズ、'.$thePrice.'円。<br>';

// ヒアドキュメント構文
# ダブルクウォート→変数展開
$version = 'PHP 7';
$msg = <<< "EOD"
これから一緒に"PHP $version"を学びましょう。
本気出すよ。
EOD;
echo $msg.'<br>';

// Nowdoc構文
# シングルクウォート→変数そのまま
$msg2 = <<< 'EOD'
これから一緒に"PHP $version"を学びましょう。
本気出すよ。
EOD;
echo $msg2.'<br>';
?>