<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function timSoDuongLonNhat($mang)
{
    $soDuongLonNhat = null;

    foreach ($mang as $giaTri) {
        if ($giaTri > 0 && ($soDuongLonNhat === null || $giaTri > $soDuongLonNhat)) {
            $soDuongLonNhat = $giaTri;
        }
    }

    return $soDuongLonNhat;
}

$mang = array(-2, 5, 7, -1, 9, 4);

$soDuongLonNhat = timSoDuongLonNhat($mang);

if ($soDuongLonNhat !== null) {
    echo "Số dương lớn nhất trong mảng là: $soDuongLonNhat";
} else {
    echo "Không có số dương trong mảng.";
}
echo "<br><br>";
?>