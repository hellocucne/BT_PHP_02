<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sapXepTangDan($mang)
{
    sort($mang);
    return $mang;
}

$mang = array(5, 2, 8, 1, 3);

$mangSapXep = sapXepTangDan($mang);

echo "Mảng sau khi sắp xếp tăng dần: ";
foreach ($mangSapXep as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>
