<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function loaiBoTrungLap($mang)
{
    $mangLoaiBoTrung = array_unique($mang);
    return $mangLoaiBoTrung;
}

$mangBanDau = array(1, 2, 2, 3, 4, 4, 5);

$mangLoaiBoTrung = loaiBoTrungLap($mangBanDau);

echo "Mảng sau khi loại bỏ phần tử trùng lặp là: ";
foreach ($mangLoaiBoTrung as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>
