<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function daoNguocChuoi($chuoi)
{
    $chuoiDaoNguoc = strrev($chuoi);
    return $chuoiDaoNguoc;
}

$chuoiCanDaoNguoc = "Hello, World!";

$chuoiDaoNguoc = daoNguocChuoi($chuoiCanDaoNguoc);

echo "Chuỗi sau khi đảo ngược là: $chuoiDaoNguoc";
echo "<br><br>";
?>