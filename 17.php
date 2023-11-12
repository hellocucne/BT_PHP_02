<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
function kiemTraPalindrome($chuoi)
{
    $chuoiSoSanh = strtolower($chuoi);
    $chuoiDaoNguoc = strrev($chuoiSoSanh);

    return $chuoiSoSanh == $chuoiDaoNguoc;
}

$chuoiCanKiemTra = "radar"; 

if (kiemTraPalindrome($chuoiCanKiemTra)) {
    echo "$chuoiCanKiemTra là chuỗi Palindrome.";
} else {
    echo "$chuoiCanKiemTra không phải là chuỗi Palindrome.";
}
echo "<br><br>";
?>