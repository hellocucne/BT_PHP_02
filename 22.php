<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function timUSCLN($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b)
{
    return ($a * $b) / timUSCLN($a, $b);
}

$so1 = 24;
$so2 = 36;

$uscln = timUSCLN($so1, $so2);

$bscnn = timBSCNN($so1, $so2);

echo "USCLN của $so1 và $so2 là: $uscln";
echo "<br>";
echo "BSCNN của $so1 và $so2 là: $bscnn";
echo "<br><br>";
?>
