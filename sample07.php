<?php
    function double($n) {
        $result = $n * 2;
        return $result;
    }

    $ans = double(5);
    echo $ans.'<br>';

    function price($tanka, $kosu) {
        $souryo = 250;
        $ryoukin = $tanka * $kosu;
        // 5000円未満は、送料250円かかる
        if ($ryoukin < 5000) {
            $ryoukin += $souryo;
            $msg = '送料込み';
        } else {
            $msg = '送料無料';
        }
        return "{$ryoukin}円({$msg})";
    }

    $kingaku1 = price(250, 2);
    $kingaku2 = price(500, 20);
    echo "金額1は、{$kingaku1}<br>";
    echo "金額2は、{$kingaku2}<br>";

    function charge($rank, $days = 1) {
        switch ($rank) {
            case 'A':
                $ryoukin = 15000 * $days;
                break;
            case 'B':
                $ryoukin = 12000 * $days;
                break;
            default:
                $ryoukin = 8000 * $days;
                break;
        }
        return $ryoukin;
    }

    $kingaku3 = charge('B', 2);
    // 第2引数を省略すると、初期値が格納され、初期値を使って処理が行われる。今回の初期値は1。
    $kingaku4 = charge('A');
    // 引数を何も与えない場合は、defaultで処理される。
    $kingaku5 = charge("");
    echo "金額3は、{$kingaku3}円。<br>";
    echo "金額4は、{$kingaku4}円。<br>";
    echo "金額5は、{$kingaku5}円。<br>";

    $tax = 0.08;
    function taxPrice($tanka2, $kosu2) {
        // 上で定義した$taxを使うために、globalをつけて、グローバル変数を使う宣言！
        global $tax;
        $ryoukin = $tanka2 * $kosu2 * (1 + $tax);
        echo "{$tanka2}円が{$kosu2}個で、{$ryoukin}円です。";
    }

    taxPrice(250, 4);
    echo "税込み". $tax*100, "%。<br>";

    
?>