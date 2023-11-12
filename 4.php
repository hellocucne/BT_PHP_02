<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function kiemTraChuoi($chuoi, $tuCanKiemTra)
{
    $chuoi = strtolower($chuoi); 
    $tuCanKiemTra = strtolower($tuCanKiemTra);

    if (strpos($chuoi, $tuCanKiemTra) !== false) {
        return "Chuỗi '$chuoi' chứa từ '$tuCanKiemTra'.";
    } else {
        return "Chuỗi '$chuoi' không chứa từ '$tuCanKiemTra'.";
    }
}

$chuoiCanKiemTra = "Hello, World!"; 
$tuCanKiemTra = "world"; 

echo kiemTraChuoi($chuoiCanKiemTra, $tuCanKiemTra);
echo "<br><br>";
?>