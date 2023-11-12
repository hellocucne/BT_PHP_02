<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function themPhanTuVaoDau($mang, $phanTu)
{
    array_unshift($mang, $phanTu);
    return $mang;
}

function themPhanTuVaoCuoi($mang, $phanTu)
{
    array_push($mang, $phanTu);
    return $mang;
}

$mangBanDau = array(2, 3, 4);

$phanTuThem = 1;

$mangSauKhiThemVaoDau = themPhanTuVaoDau($mangBanDau, $phanTuThem);

echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu là: ";
foreach ($mangSauKhiThemVaoDau as $giaTri) {
    echo $giaTri . " ";
}

echo "<br>";

$mangSauKhiThemVaoCuoi = themPhanTuVaoCuoi($mangBanDau, $phanTuThem);

echo "Mảng sau khi thêm phần tử $phanTuThem vào cuối là: ";
foreach ($mangSauKhiThemVaoCuoi as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>