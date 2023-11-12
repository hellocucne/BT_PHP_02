<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function tinhTongSoLe($n)
{
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }

    return $tong;
}

$n = 10;

$tong = tinhTongSoLe($n);

echo "Tổng các số lẻ từ 1 đến $n là: $tong";
echo "<br><br>";
?>

