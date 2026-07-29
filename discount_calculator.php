<?php
// 課題１：割引計算プログラム
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo "割引後の価格: " . $final_price . "円<br>";

// 課題２：奇数・偶数判定プログラム
$number = 7;

if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です<br>";
}
?>

<?php
// 課題３：複数条件の判定
$age = 25;
$is_member = true;
$is_student = false;

// 条件1:　18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件2:　65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}

// 課題４：複合代入演算子の練習
$score = 100;

$score += 50; // ボーナスステージクリア
echo "ボーナス後: {$score}<br>";

$score -= 30; // ダメージ
echo "ダメージ後: {$score}<br>";

$score *= 2;// 2倍アイテム
echo "最終スコア: {$score}<br>";
?>


