<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function timViTriPhanTu($mang, $phanTu)
{
    $viTri = array_search($phanTu, $mang);
    return $viTri !== false ? $viTri : "Phần tử không tồn tại trong mảng.";
}

$mang = array(1, 2, 3, 4, 5);

$phanTuCanTim = 3;

$viTri = timViTriPhanTu($mang, $phanTuCanTim);

echo "Vị trí của phần tử $phanTuCanTim trong mảng là: $viTri";
echo "<br><br>";
?>