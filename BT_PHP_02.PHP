<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function kiemTraSoChan($so)
{
    if ($so % 2 == 0) {
        return "Số $so là số chẵn.";
    } else {
        return "Số $so không phải là số chẵn.";
    }
}

$soCanKiemTra = 10;
echo kiemTraSoChan($soCanKiemTra);
echo "<br><br>";
?>

<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function tinhTong($n)
{
    $tong = 0;

    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }

    return $tong;
}

$soN = 5; 
echo "Tổng của các số từ 1 đến $soN là: " . tinhTong($soN);
echo "<br><br>";
?>

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

<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function kiemTraChuoi($chuoi, $tuCanKiemTra)
{
    $chuoi = strtolower($chuoi); 
    $tuCanKiemTra = strtolower($tuCanKiemTra);

    if (strpos($chuoi, $tuCanKiemTra) !== false) {
        return "Chuỗi '$chuoi' chứa từ '$tuCanKiemTra'.";
    } else {
        return "Chuỗi '$chuoi' không chứa từ '$tuCanKiemTra'.";
    }
}

$chuoiCanKiemTra = "Hello, World!"; 
$tuCanKiemTra = "world"; 

echo kiemTraChuoi($chuoiCanKiemTra, $tuCanKiemTra);
echo "<br><br>";
?>

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

<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function sapXepTangDan($mang)
{
    sort($mang);
    return $mang;
}

$mang = array(5, 2, 8, 1, 3);

$mangSapXep = sapXepTangDan($mang);

echo "Mảng sau khi sắp xếp tăng dần: ";
foreach ($mangSapXep as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>

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

<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function kiemTraSoNguyenTo($so)
{
    if ($so < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }
    return true;
}

function timSoNguyenToTrongKhoang($start, $end)
{
    $soNguyenTo = array();

    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            $soNguyenTo[] = $i;
        }
    }

    return $soNguyenTo;
}

$khoangBatDau = 1; 
$khoangKetThuc = 50; 

$ketQua = timSoNguyenToTrongKhoang($khoangBatDau, $khoangKetThuc);

echo "Các số nguyên tố trong khoảng từ $khoangBatDau đến $khoangKetThuc là: ";
foreach ($ketQua as $soNguyenTo) {
    echo $soNguyenTo . " ";
}
echo "<br><br>";
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function tinhTongMang($mang)
{
    $tong = 0;

    foreach ($mang as $giaTri) {
        $tong += $giaTri;
    }

    return $tong;
}

$mang = array(1, 2, 3, 4, 5);

$tongMang = tinhTongMang($mang);

echo "Tổng của các số trong mảng là: $tongMang";
echo "<br><br>";
?>

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

<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function kiemTraSoArmstrong($so)
{
    $soMoi = $so;
    $soChuSo = strlen($so);
    $tong = 0;

    while ($soMoi > 0) {
        $chuSo = $soMoi % 10;
        $tong += pow($chuSo, $soChuSo);
        $soMoi = (int)($soMoi / 10);
    }

    return $tong == $so;
}

$soCanKiemTra = 153; 

if (kiemTraSoArmstrong($soCanKiemTra)) {
    echo "$soCanKiemTra là số Armstrong.";
} else {
    echo "$soCanKiemTra không phải là số Armstrong.";
}
echo "<br><br>";
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function chenPhanTu($mang, $phanTu, $viTriChen)
{
    array_splice($mang, $viTriChen, 0, $phanTu);
    return $mang;
}

$mangBanDau = array(1, 2, 3, 4, 5);

$phanTuChen = 10;

$viTriChen = 2;

$mangMoi = chenPhanTu($mangBanDau, $phanTuChen, $viTriChen);

echo "Mảng sau khi chèn phần tử $phanTuChen vào vị trí $viTriChen là: ";
foreach ($mangMoi as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function loaiBoTrungLap($mang)
{
    $mangLoaiBoTrung = array_unique($mang);
    return $mangLoaiBoTrung;
}

$mangBanDau = array(1, 2, 2, 3, 4, 4, 5);

$mangLoaiBoTrung = loaiBoTrungLap($mangBanDau);

echo "Mảng sau khi loại bỏ phần tử trùng lặp là: ";
foreach ($mangLoaiBoTrung as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function timViTriPhanTu($mang, $phanTu)
{
    $viTri = array_search($phanTu, $mang);
    return $viTri !== false ? $viTri : "Phần tử không tồn tại trong mảng.";
}

$mang = array(1, 2, 3, 4, 5);

$phanTuCanTim = 3;

$viTri = timViTriPhanTu($mang, $phanTuCanTim);

echo "Vị trí của phần tử $phanTuCanTim trong mảng là: $viTri";
echo "<br><br>";
?>

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

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function demSoLuongPhanTu($mang)
{
    $soLuong = count($mang);
    return $soLuong;
}

$mang = array(1, 2, 3, 4, 5);

$soLuongPhanTu = demSoLuongPhanTu($mang);

echo "Số lượng phần tử trong mảng là: $soLuongPhanTu";
echo "<br><br>";
?>

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

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function demSoLanXuatHien($mang, $phanTu)
{
    $soLanXuatHien = 0;

    foreach ($mang as $giaTri) {
        if ($giaTri == $phanTu) {
            $soLanXuatHien++;
        }
    }

    return $soLanXuatHien;
}

$mang = array(1, 2, 3, 4, 2, 5, 2);

$phanTuCanDem = 2;

$soLanXuatHien = demSoLanXuatHien($mang, $phanTuCanDem);

echo "Phần tử $phanTuCanDem xuất hiện $soLanXuatHien lần trong mảng.";
echo "<br><br>";
?>

<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sapXepGiamDan($mang)
{
    rsort($mang);
    return $mang;
}

$mang = array(5, 2, 8, 1, 3);

$mangGiamDan = sapXepGiamDan($mang);

echo "Mảng sau khi sắp xếp giảm dần là: ";
foreach ($mangGiamDan as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>

<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function themPhanTuVaoDau($mang, $phanTu)
{
    array_unshift($mang, $phanTu);
    return $mang;
}

function themPhanTuVaoCuoi($mang, $phanTu)
{
    array_push($mang, $phanTu);
    return $mang;
}

$mangBanDau = array(2, 3, 4);

$phanTuThem = 1;

$mangSauKhiThemVaoDau = themPhanTuVaoDau($mangBanDau, $phanTuThem);

echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu là: ";
foreach ($mangSauKhiThemVaoDau as $giaTri) {
    echo $giaTri . " ";
}

echo "<br>";

$mangSauKhiThemVaoCuoi = themPhanTuVaoCuoi($mangBanDau, $phanTuThem);

echo "Mảng sau khi thêm phần tử $phanTuThem vào cuối là: ";
foreach ($mangSauKhiThemVaoCuoi as $giaTri) {
    echo $giaTri . " ";
}
echo "<br><br>";
?>

<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function timSoLonThuHai($mang)
{
    rsort($mang);

    $mangKhongTrungLap = array_values(array_unique($mang));

    if (count($mangKhongTrungLap) < 2) {
        return "Không có số lớn thứ hai trong mảng.";
    }

    return $mangKhongTrungLap[1];
}

$mang = array(5, 2, 8, 1, 3);

$soLonThuHai = timSoLonThuHai($mang);

echo "Số lớn thứ hai trong mảng là: $soLonThuHai";
echo "<br><br>";
?>

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

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function kiemTraSoHoanHao($so)
{
    if ($so <= 0) {
        return false;
    }

    $tongUoc = 0;

    for ($i = 1; $i <= $so / 2; $i++) {
        if ($so % $i == 0) {
            $tongUoc += $i;
        }
    }

    return $tongUoc == $so;
}

$soCanKiemTra = 28; 

if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo.";
} else {
    echo "$soCanKiemTra không phải là số hoàn hảo.";
}
echo "<br><br>";
?>

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

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function kiemTraSoNguyenTo2($so)
{
    if ($so < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }

    return true;
}

$soCanKiemTra = 13; 

if (kiemTraSoNguyenTo2($soCanKiemTra)) {
    echo "$soCanKiemTra là số nguyên tố.";
} else {
    echo "$soCanKiemTra không phải là số nguyên tố.";
}
echo "<br><br>";
?>

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

<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function tinhTongSoLe($n)
{
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }

    return $tong;
}

$n = 10;

$tong = tinhTongSoLe($n);

echo "Tổng các số lẻ từ 1 đến $n là: $tong";
echo "<br><br>";
?>


<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function kiemTraSoChinhPhuong($so)
{
    $canBacHai = sqrt($so);
    return floor($canBacHai) == $canBacHai;
}

function timSoChinhPhuongTrongKhoang($batDau, $ketThuc)
{
    $soChinhPhuong = array();

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        if (kiemTraSoChinhPhuong($i)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

$batDau = 1;
$ketThuc = 100;

$soChinhPhuongTrongKhoang = timSoChinhPhuongTrongKhoang($batDau, $ketThuc);

echo "Các số chính phương trong khoảng từ $batDau đến $ketThuc là: ";
foreach ($soChinhPhuongTrongKhoang as $so) {
    echo $so . " ";
}
echo "<br><br>";
?>

<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function kiemTraChuoiCon($chuoiCon, $chuoi)
{
    $viTri = strpos($chuoi, $chuoiCon);

    if ($viTri !== false) {
        echo "$chuoiCon là chuỗi con của $chuoi.";
    } else {
        echo "$chuoiCon không là chuỗi con của $chuoi.";
    }
}

$chuoiGoc = "Hello, world!";

$chuoiCanKiemTra = "world";

kiemTraChuoiCon($chuoiCanKiemTra, $chuoiGoc);
echo "<br><br>";
?>