<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function kiemTraSoChan($so)
{
    if ($so % 2 == 0) {
        return "Số $so là số chẵn.";
    } else {
        return "Số $so không phải là số chẵn.";
    }
}

$soCanKiemTra = 10;
echo kiemTraSoChan($soCanKiemTra);
echo "<br><br>";
?>
