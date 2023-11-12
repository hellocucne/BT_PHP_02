<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function tinhGiaiThua($n)
{
    if ($n < 0) {
        return "Không thể tính giai thừa cho số âm.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $giaiThua = 1;
        for ($i = 2; $i <= $n; $i++) {
            $giaiThua *= $i;
        }
        return $giaiThua;
    }
}
$soCanTinhGiaiThua = 5; 
echo "Giai thừa của $soCanTinhGiaiThua là: " . tinhGiaiThua($soCanTinhGiaiThua);
echo "<br><br>";
?>
