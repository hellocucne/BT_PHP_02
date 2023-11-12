<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $phanTu)
{
    $soLanXuatHien = 0;

    foreach ($mang as $giaTri) {
        if ($giaTri == $phanTu) {
            $soLanXuatHien++;
        }
    }

    return $soLanXuatHien;
}

$mang = array(1, 2, 3, 4, 2, 5, 2);

$phanTuCanDem = 2;

$soLanXuatHien = demSoLanXuatHien($mang, $phanTuCanDem);

echo "Phần tử $phanTuCanDem xuất hiện $soLanXuatHien lần trong mảng.";
echo "<br><br>";
?>
