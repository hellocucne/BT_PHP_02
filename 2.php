<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function tinhTong($n)
{
    $tong = 0;

    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }

    return $tong;
}

$soN = 5; 
echo "Tổng của các số từ 1 đến $soN là: " . tinhTong($soN);
echo "<br><br>";
?>