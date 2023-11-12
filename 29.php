<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function kiemTraSoChinhPhuong($so)
{
    $canBacHai = sqrt($so);
    return floor($canBacHai) == $canBacHai;
}

function timSoChinhPhuongTrongKhoang($batDau, $ketThuc)
{
    $soChinhPhuong = array();

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (kiemTraSoChinhPhuong($i)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

$batDau = 1;
$ketThuc = 100;

$soChinhPhuongTrongKhoang = timSoChinhPhuongTrongKhoang($batDau, $ketThuc);

echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
foreach ($soChinhPhuongTrongKhoang as $so) {
    echo $so . " ";
}
echo "<br><br>";
?>
