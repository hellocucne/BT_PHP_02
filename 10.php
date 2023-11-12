<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function tinhFibonacci($n)
{
    $fibonacci = array(0, 1);

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

function inFibonacciTrongKhoang($start, $end)
{
    $n = 0;

    while (true) {
        $fibonacci = tinhFibonacci($n);

        if ($fibonacci[$n] > $end) {
            break;
        }

        if ($fibonacci[$n] >= $start) {
            echo $fibonacci[$n] . " ";
        }

        $n++;
    }
}

$khoangBatDau = 0; 
$khoangKetThuc = 100; 

echo "Các số Fibonacci trong khoảng từ $khoangBatDau đến $khoangKetThuc là: ";
inFibonacciTrongKhoang($khoangBatDau, $khoangKetThuc);
echo "<br><br>";
?>
