<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function timSoLonThuHai($mang)
{
    rsort($mang);

    $mangKhongTrungLap = array_values(array_unique($mang));

    if (count($mangKhongTrungLap) < 2) {
        return "Không có số lớn thứ hai trong mảng.";
    }

    return $mangKhongTrungLap[1];
}

$mang = array(5, 2, 8, 1, 3);

$soLonThuHai = timSoLonThuHai($mang);

echo "Số lớn thứ hai trong mảng là: $soLonThuHai";
echo "<br><br>";
?>