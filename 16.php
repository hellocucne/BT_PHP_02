<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function demSoLuongPhanTu($mang)
{
    $soLuong = count($mang);
    return $soLuong;
}

$mang = array(1, 2, 3, 4, 5);

$soLuongPhanTu = demSoLuongPhanTu($mang);

echo "Số lượng phần tử trong mảng là: $soLuongPhanTu";
echo "<br><br>";
?>