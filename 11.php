<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function kiemTraSoArmstrong($so)
{
    $soMoi = $so;
    $soChuSo = strlen($so);
    $tong = 0;

    while ($soMoi > 0) {
        $chuSo = $soMoi % 10;
        $tong += pow($chuSo, $soChuSo);
        $soMoi = (int)($soMoi / 10);
    }

    return $tong == $so;
}

$soCanKiemTra = 153; 

if (kiemTraSoArmstrong($soCanKiemTra)) {
    echo "$soCanKiemTra là số Armstrong.";
} else {
    echo "$soCanKiemTra không phải là số Armstrong.";
}
echo "<br><br>";
?>