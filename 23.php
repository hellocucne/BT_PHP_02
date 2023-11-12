<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function kiemTraSoHoanHao($so)
{
    if ($so <= 0) {
        return false;
    }

    $tongUoc = 0;

    for ($i = 1; $i <= $so / 2; $i++) {
        if ($so % $i == 0) {
            $tongUoc += $i;
        }
    }

    return $tongUoc == $so;
}

$soCanKiemTra = 28; 

if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo.";
} else {
    echo "$soCanKiemTra không phải là số hoàn hảo.";
}
echo "<br><br>";
?>
