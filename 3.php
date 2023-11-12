<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function inBangCuuChuong($soCuuChuong, $soLan)
{
    for ($i = 1; $i <= $soLan; $i++) {
        $tich = $soCuuChuong * $i;
        echo "$soCuuChuong x $i = $tich<br>";
    }
}

for ($j = 1; $j <= 10; $j++) {
    echo "Bảng cửu chương $j:<br>";
    inBangCuuChuong($j, 10); 
    echo "<br>";
}
?>