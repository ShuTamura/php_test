<?php
function scorejudge ($score1, $score2, $score3) {
    $total = $score1+$score2+$score3;
    if ($total>210) {
        echo "合計点は".$total."なので合格です";
    }else {
        echo "合計点は".$total."なので不合格です";
    }
}




function triangle ($bottom, $height) {
    $area = $bottom*$height/2;
    echo "三角形の面積は".$area."です";
}
function square ($height, $width) {
    $area = $height * $width;
    echo "四角形の面積は".$area."です";
}
function trapezoid ($upper, $lower, $height) {
    $area = (($upper+$lower)*$height)/2;
    echo "台形の面積は".$area."です";
}

echo triangle(10, 10)."<br>";
echo square(10, 10)."<br>";
echo trapezoid(15, 10, 10)."<br>";