<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function kiemTraChuoiCon($chuoiCon, $chuoi)
{
    $viTri = strpos($chuoi, $chuoiCon);

    if ($viTri !== false) {
        echo "$chuoiCon là chuỗi con của $chuoi.";
    } else {
        echo "$chuoiCon không là chuỗi con của $chuoi.";
    }
}

$chuoiGoc = "Hello, world!";

$chuoiCanKiemTra = "world";

kiemTraChuoiCon($chuoiCanKiemTra, $chuoiGoc);
echo "<br><br>";
?>