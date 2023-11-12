<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function tinhTongMang($mang)
{
    $tong = 0;

    foreach ($mang as $giaTri) {
        $tong += $giaTri;
    }

    return $tong;
}

$mang = array(1, 2, 3, 4, 5);

$tongMang = tinhTongMang($mang);

echo "Tổng của các số trong mảng là: $tongMang";
echo "<br><br>";
?>