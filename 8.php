<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function kiemTraSoNguyenTo($so)
{
    if ($so < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }
    return true;
}

function timSoNguyenToTrongKhoang($start, $end)
{
    $soNguyenTo = array();

    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            $soNguyenTo[] = $i;
        }
    }

    return $soNguyenTo;
}

$khoangBatDau = 1; 
$khoangKetThuc = 50; 

$ketQua = timSoNguyenToTrongKhoang($khoangBatDau, $khoangKetThuc);

echo "Các số nguyên tố trong khoảng từ $khoangBatDau đến $khoangKetThuc là: ";
foreach ($ketQua as $soNguyenTo) {
    echo $soNguyenTo . " ";
}
echo "<br><br>";
?>
