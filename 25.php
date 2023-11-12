<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function kiemTraSoNguyenTo2($so)
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

$soCanKiemTra = 13; 

if (kiemTraSoNguyenTo2($soCanKiemTra)) {
    echo "$soCanKiemTra là số nguyên tố.";
} else {
    echo "$soCanKiemTra không phải là số nguyên tố.";
}
echo "<br><br>";
?>
