<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sapXepGiamDan($mang)
{
    rsort($mang);
    return $mang;
}

$mang = array(5, 2, 8, 1, 3);

$mangGiamDan = sapXepGiamDan($mang);

echo "Mảng sau khi sắp xếp giảm dần là: ";
foreach ($mangGiamDan as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>
