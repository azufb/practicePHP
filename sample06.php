<?php
// 条件によって処理を分岐する、if文。

$tokuten = 85;
if ($tokuten >= 80) {
    echo '素晴らしい！<br>';
} else {
    echo '残念！', $tokuten, 'でした...。次回はもうちょっと頑張ってみましょう！<br>';
}

$tokuten2 = 55;
if ($tokuten2 >= 80) {
    echo '素晴らしい！<br>';
} else {
    echo '残念！', $tokuten2, 'でした...。次回はもうちょっと頑張ってみましょう！<br>';
}

$age = 18;
if ($age < 13) {
    $price = 0;
} else if ($age <= 15) {
    $price = 500;
} else if ($age <= 19) {
    $price = 1000;
} else {
    $price = 1500;
}

echo $age. '歳なので'. $price. '円です。<br>';

$sugaku = 85;
$eigo = 67;
if ($sugaku >= 60) {
    if ($eigo >= 60) {
        echo 'おめでとう！合格です！<br>';
    } else {
        echo '残念！不合格です。<br>';
    }
} else {
    echo '残念！不合格です。<br>';
}

if (($sugaku >= 60) && ($eigo >= 60)) {
    echo 'おめでとう！合格です！<br>';
} else {
    echo '残念！不合格です。<br>';
}

$color = 'blue';
switch ($color) {
    case 'green':
        $price = 120;
        break;
    case 'red':
        $price = 140;
        break;
    case 'blue':
        $price = 160;
        break;
    default:
        $price = 150;
        break;
}
echo "{$color}は{$price}円。<br>";

// 空の配列を作る
$numArray = array();

// 配列の要素が5個になるまで、繰り返し処理を行う
while (count($numArray) < 5) {
    // 1〜30の数字から、乱数を1つ作る
    $num = mt_rand(1, 30);
    // $numArrayに作った乱数が含まれているかどうかを確認
    if (! in_array($num, $numArray)) {
        // $numArrayに含まれていなければ追加
        array_push($numArray, $num);
    }
}
// 5個の要素が入った配列を確認
print_r($numArray);

do {
    // 変数に1〜13の乱数を入れる
    $a = mt_rand(1, 13);
    $b = mt_rand(1, 13);
    $c = mt_rand(1, 13);
    $abc = $a + $b + $c;

    // 変数$aと$b、$cの合計が、21になったらループを抜ける
    if ($abc == 21) {
        break;
    }
} while (TRUE);
echo "合計が21になる3個の数字。{$a}、{$b}、{$c}。<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "{$i}回。<br>";
}

$price = 0;
for ($kyaku = 1; $kyaku <= 6; $kyaku++) {
    if ($kyaku <= 3) {
        $price += 1000;
    } else {
        $price += 500;
    }
    echo "{$kyaku}人、{$price}円。<br>";
}

// 配列に値を格納
$list = array(20, -32, 50, -5, 40);
// 配列に格納されている要素の数をカウント
$count = count($list);
$sum = 0;
for ($i=0; $i<$count; $i++) {
    // 配列$listから要素を1つずつ取り出す
    $value = $list[$i];
    // 取り出した要素がマイナスの値であるかどうかを確認
    if ($value<0) {
        $sum = "マイナスの値{$value}が含まれていたので、繰り返しの処理を中断しますね。<br>";
        break; // breakを使って処理を中断。
    } else {
        // マイナスの値ではなかった場合、足し算。
        $sum += $value;
    }
}
echo "合計：{$sum}<br>";

$list2 = array(20, -32, 50, -5, 40);
$count2 = count($list2);
$sum2 = 0;
for ($i = 0; $i < $count2; $i++) {
    $value2 = $list2[$i];
    if ($value2 < 0) {
        // continueを使って、マイナスの値が要素の中で見つかっても、加算処理を正の数だけで行うようにする。
        continue;
    }
    $sum2 += $value2;
}
echo "合計：{$sum2}<br>";
/*
①trueとfalseの単純な2分岐
if (条件式) {
    trueの場合の処理A
} else {
    falseの場合の処理B
}

②複数の条件式を用いた処理の分岐
※else ifは条件式の数だけ追加可能。今回は3つだが、4つ以上でもOK。
if (条件式1) {
    条件式1がtrueの場合の処理A
} else if (条件式2) {
    条件式2がtrueの場合の処理B
} else if (条件式3) {
    条件式3がtrueの場合の処理C
} else {
    条件式1〜3全てでfalseの場合の処理Z
}

③値による処理の分岐
※caseは格納されている値の可能性の数だけ追加可能。今回は3つだが、4つ以上でもOK。
※基本的には、breakを忘れない。breakを付けないと、値に関わらず一致した処理のその後のほかの処理もやっちゃう。
switch (変数) {
    case 値1:
        変数に格納されている値が値1の場合の処理A
        break;
    case 値2:
        変数に格納されている値が値2の場合の処理B
        break;
    case 値3:
        変数に格納されている値が値3の場合の処理C
        break;
    default:
        変数に格納されている値が値1でも値2でも値3でもない場合の処理Z
        break;
}

④条件が満たされている間は繰り返す
while (条件式) {
    条件が満たされている間繰り返す処理
}

⑤条件が満たされている間は繰り返す（処理後に判定)
do {
    繰り返す処理
} while (条件式)

⑥指定した回数(n回)繰り返し
※$iの初期値は0じゃなくても良い。自由に決められる。
※if文とbreakを組み合わせることで、繰り返しを途中で中断できる。
for ($i = 0; $i < n; $i++) {
    繰り返す処理
}
*/
?>