<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function timSoAmLonNhat($mang)
{
    $soAmLonNhat = null;

    foreach ($mang as $giaTri) {
        if ($giaTri < 0 && ($soAmLonNhat === null || $giaTri > $soAmLonNhat)) {
            $soAmLonNhat = $giaTri;
        }
    }

    return $soAmLonNhat;
}

$mang = array(-2, 5, -7, -1, 9, 4);

$soAmLonNhat = timSoAmLonNhat($mang);

if ($soAmLonNhat !== null) {
    echo "Số âm lớn nhất trong mảng là: $soAmLonNhat";
} else {
    echo "Không có số âm trong mảng.";
}
echo "<br><br>";
?>
