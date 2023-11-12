<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function timGiaTriLonNhat($mang)
{
    $lonNhat = $mang[0]; 

    foreach ($mang as $giaTri) {
        if ($giaTri > $lonNhat) {
            $lonNhat = $giaTri;
        }
    }

    return $lonNhat;
}

function timGiaTriNhoNhat($mang)
{
    $nhoNhat = $mang[0]; 

    foreach ($mang as $giaTri) {
        if ($giaTri < $nhoNhat) {
            $nhoNhat = $giaTri;
        }
    }

    return $nhoNhat;
}

$mang = array(3, 1, 8, 5, 7);

$giaTriLonNhat = timGiaTriLonNhat($mang);
$giaTriNhoNhat = timGiaTriNhoNhat($mang);

echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat<br>";
echo "<br><br>";
?>