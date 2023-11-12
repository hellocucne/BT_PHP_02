<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function chenPhanTu($mang, $phanTu, $viTriChen)
{
    array_splice($mang, $viTriChen, 0, $phanTu);
    return $mang;
}

$mangBanDau = array(1, 2, 3, 4, 5);

$phanTuChen = 10;

$viTriChen = 2;

$mangMoi = chenPhanTu($mangBanDau, $phanTuChen, $viTriChen);

echo "Mảng sau khi chèn phần tử $phanTuChen vào vị trí $viTriChen là: ";
foreach ($mangMoi as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>