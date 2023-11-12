<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function timSoLeLonNhat($mang)
{
    $soLeLonNhat = null;

    foreach ($mang as $giaTri) {
        if ($giaTri % 2 != 0 && ($soLeLonNhat === null || $giaTri > $soLeLonNhat)) {
            $soLeLonNhat = $giaTri;
        }
    }

    return $soLeLonNhat;
}

$mang = array(2, 5, 7, 1, 9, 4);

$soLeLonNhat = timSoLeLonNhat($mang);

if ($soLeLonNhat !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<br><br>";
?>