<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function kiemTraChanLe($so)
{
    if (!is_int($so)) {
        echo "Số $so không phải là số nguyên.";
    } elseif ($so % 2 == 0) {
        echo "Số $so là số nguyên chẵn.";
    } else {
        echo "1. <br> Số $so là số nguyên lẻ.";
    }
}
// Sử dụng hàm kiểm tra số nguyên chẵn lẻ
kiemTraChanLe(3);
echo "<br>";
kiemTraChanLe(10);
echo "<br>";
kiemTraChanLe(3.14);
echo "<hr>";
// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function tinhTongso($n)
{
    $tongso = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tongso += $i;
    }
    return $tongso;
}
// Sử dụng hàm tính tổng
$n = 10;
$tongso = tinhTongso($n);
echo "2. Tổng của các số từ 1 đến $n là: $tongso<hr>";
// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function inBangCuuChuong($so){
    echo "3. Bảng cửu chương số $so là: <br>";
    for($i=1; $i<=10; $i++){
        $tich=$so * $i;
        echo "$so x $i = $tich";
        echo "<br>";
    }
}
$so=5;
inBangCuuChuong($so);
echo "<hr>";
// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function kiemTraChuaTu($chuoi, $tu){
    $kiemtra = strpos($chuoi, $tu);
    if($kiemtra!==False){
        echo "4. <br>";
        echo "Chuỗi $chuoi chứa từ $tu .<br>";
    }else{
        echo "Chuỗi $chuoi không chứa từ $tu . <br>";
    }
}
$chuoi = "Hôm nay là ngày đầu tuần";
$tu = "ngày đầu tuần";
kiemTraChuaTu($chuoi, $tu);
$chuoi = "Xin chào mọi người, mình là Phạm Thị Nụ";
$tu = "phạm thị nụ";
kiemTraChuaTu($chuoi, $tu);
echo "<hr>";
// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array){
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value){
        if ($value < $min){
            $min = $value;
        }
        if ($value > $max){
            $max = $value;
        }
    }
    echo "5. <br>";
    echo "Giá trị nhỏ nhất trong mảng là: $min <br>";
    echo "Giá trị lớn nhất trong mảng là: $max <br>";
}
$array=[1, 20, 26, 30, -10, 40];
findMinMax($array);
echo "<hr>";
// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. 
function sortArray($array) {
    sort($array);
    return $array;
}
$myArray = array( 12, 5, 98, 34, 20, 3);

$sortedArray = sortArray($myArray);
echo "6. Mảng theo thứ tự tăng dần: ";
print_r($sortedArray);
echo "<hr>";
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaiThua($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
// Số cần tính giai thừa
$so = 9;
$giaiThua = tinhGiaiThua($so);
echo "7. Giai thừa của $so là: $giaiThua";
echo "<hr>";
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function kiemTraSNT($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
function timSoNTTrongKhoang($start, $end) {
    echo "8. Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraSNT($i)) {
            echo $i . " ";
        }
    }
}
// Khoảng cần kiểm tra số nguyên tố
$batDau = 3;
$ketThuc = 20;
timSoNTTrongKhoang($batDau, $ketThuc);
echo "<hr>";
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function tinhTong($array) {
    $tong = 0;
    foreach ($array as $so) {
        $tong += $so;
    }
    return $tong;
}
$mang = array(12, 5, 98, 34, 20, 3);
echo "9. Tổng của các số trong mảng là: " . tinhTong($mang);
echo "<hr>";
// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
// Dãy Fibonacci là dãy vô hạn các số tự nhiên bắt đầu bằng 1 và 1, sau đó các số tiếp theo sẽ bằng tổng của 2 số liền trước nó. 
function inFibonacciTrongKhoang($start, $end) {
    $first = 0;
    $second = 1;
    if ($start <= 0) {
        echo $first . " ";
        echo $second . " ";
    }
    $next = $first + $second;
    while ($next <= $end) {
        if ($next >= $start) {
            echo $next . " ";
        }
        $first = $second;
        $second = $next;
        $next = $first + $second;
    }
}
// Khoảng cần in số Fibonacci
$batDau = 20;
$ketThuc = 203;
echo "10. Các số Fibonacci trong khoảng từ $batDau đến $ketThuc là: ";
inFibonacciTrongKhoang($batDau, $ketThuc); 
echo "<hr>";
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function kiemTraSoArmstrong($so) {
    $soChuSo = strlen((string)$so);
    $tong = 0;
    $temp = $so;

    while ($temp > 0) {
        $soCuoi = $temp % 10;
        $tong += pow($soCuoi, $soChuSo);
        $temp = (int)($temp / 10);
    }

    return $so == $tong;
}

$soCanKiemTra = 153;

if (kiemTraSoArmstrong($soCanKiemTra)) {
    echo "11. $soCanKiemTra là số Armstrong. <hr>";
} else {
    echo "11. $soCanKiemTra không phải là số Armstrong. <hr>";
}
// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    if ($position < 0 || $position > count($array)) {
      echo "Vị trí chèn không hợp lệ.";
      return $array;
    }
    
    array_splice($array, $position, 0, $element);//array_splice: hàm chèn phần tử với vị trí position và không xóa phần tử nào
    return $array;
  }
  
  $array = [1, 3, 5, 7, 9]; // Mảng ban đầu
  $element = 10; // Phần tử cần chèn
  $position = 2; // Vị trí chèn
  
  $result = insertElement($array, $element, $position);
  echo "12. Mảng mới: " . implode(", ", $result);//hàm implode() để nối các phần tử của mảng thành chuỗi và phân tách bằng dấu phẩy
  echo "<hr>";
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function loaiBo($mang)
{
    $mangLoaiBoTrungLap = array_unique($mang);
    return $mangLoaiBoTrungLap;
}
$mang = array(11, 22, 3, 4, 3, 5, 6, 22, 2);
$mangSauKhiLoaiBo = loaiBo($mang);
echo "13. Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($mangSauKhiLoaiBo);
echo"<hr>";

// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function timViTri($mang, $phanTuCanTim) {
    $viTri = array_search($phanTuCanTim, $mang);
    return $viTri !== false ? $viTri : 'Không tìm thấy';
}

// Mảng cần tìm vị trí phần tử
$mang = [5, 20, 3, 45, 51, 43];

// Phần tử cần tìm
$phanTu = 45;

$viTri = timViTri($mang, $phanTu);
echo "14. Vị trí của phần tử $phanTu trong mảng là: $viTri <hr>";
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
function daochuoi($str){
    return strrev($str);
}
$string = "Xin chao moi nguoi, buoi toi tot lanh";

    // Gọi hàm reverseString
$daochuoi = daochuoi($string);
    
    // In ra kết quả
echo "15. <br>";
echo "Chuỗi ban đầu: $string<br>";
echo "Chuỗi sau khi đảo ngược: $daochuoi";
echo "<hr>";
// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function tinhSoLuong($array){
    return count($array);
}
$mang = [20, 03, 2003, 4, 15, 18, 2005, 2023];
$soluong = tinhSoLuong($mang);
echo "16. Số lượng phần tử trong một mảng là: $soluong";
echo "<hr>";
// 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function Palindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}
echo "17. <br>";
$chuoi = "Hi everyone!";
if (Palindrome($chuoi)) {
    echo "Chuỗi '$chuoi' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$chuoi' không phải là chuỗi Palindrome.";
}
echo "<hr>";
// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function soLanXH($mang, $phanTuCanDem) {
    $soLanXH = array_count_values($mang);
    return isset($soLanXH[$phanTuCanDem]) ? $soLanXH[$phanTuCanDem] : 0;
}

$mangDL = array(1, 2, 3, 4, 2, 5, 2, 6, 2, 7);
$phanTuCanDem = 2;
$soLanXH = soLanXH($mangDL, $phanTuCanDem);
echo "18. <br>";
// In ra số lần xuất hiện
echo "Số lần xuất hiện của phần tử $phanTuCanDem trong mảng là: " . $soLanXH;
echo "<hr>";

// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function rsortArray($array) {
    rsort($array);
    return $array;
}
$myArray = array( 12, 5, 98, 34, 20, 3);

$rsortedArray = rsortArray($myArray);
echo "19. Mảng mảng theo thứ tự giảm dần: ";
print_r($rsortedArray);
echo "<hr>";
// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function themVaoDau($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}

function themVaoCuoi($mang, $phanTu) {
    $mang[] = $phanTu;
    return $mang;
}

$mangDL = array(6, 7, 3, 8, 11);
$phanTuThem = 5;

$mangSauThemVaoDau = themVaoDau($mangDL, $phanTuThem);
echo "20. <br>";
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu: " . implode(', ', $mangSauThemVaoDau);

$mangSauThemVaoCuoi = themVaoCuoi($mangDL, $phanTuThem);
echo "<br> Mảng sau khi thêm phần tử $phanTuThem vào cuối: " . implode(', ', $mangSauThemVaoCuoi);

echo "<hr>";
// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function timSoLonThuHai($mang) {
    $max = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;

    foreach ($mang as $so) {
        if ($so > $max) {
            $secondMax = $max;
            $max = $so;
        } elseif ($so > $secondMax && $so != $max) {
            $secondMax = $so;
        }
    }
    return $secondMax !== PHP_INT_MIN ? $secondMax : "Không có số lớn thứ hai";
}
// Mảng số cần tìm số lớn thứ hai
$mang = [12, 5, 98, 34, 20, 3];
$soLonThuHai = timSoLonThuHai($mang);
echo "21. Số lớn thứ hai trong mảng là: " . $soLonThuHai;
echo "<hr>";
// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function USCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function BSCNN($a, $b) {
    return abs($a * $b) / USCLN($a, $b);
}
$so1 = 20;
$so2 = 3;
echo "22. <br>";
echo "Ước số chung lớn nhất của $so1 và $so2 là: " . USCLN($so1, $so2) . "<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: " . BSCNN($so1, $so2) . "<br>";
echo "<hr>";
// 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function kiemTraSoHoanHao($n) {
    if ($n <= 0) {
        return false;
    }
    $tongUoc = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $tongUoc += $i;
        }
    }
    return $tongUoc == $n;
}
$soCanKiemTra = 18;
if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "23. $soCanKiemTra là số hoàn hảo <br>";
} else {
    echo "23. $soCanKiemTra không phải là số hoàn hảo <br>";
}
echo "<hr>";
// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. 
function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;

    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
            $soLeLonNhat = $so;
        }
    }

    return $soLeLonNhat;
}

// Mảng ví dụ
$mangSo = [1, 14, 5, 99, 34, 20, 3, 9, 21, 10];

// Gọi hàm để tìm số lẻ lớn nhất trong mảng
$ketQua = timSoLeLonNhat($mangSo);

// In kết quả
echo "24. Số lẻ lớn nhất trong mảng là: $ketQua <hr>";

// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function soNguyenTo($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
// Số cần kiểm tra
$soCanKiemTra = 23;
if (soNguyenTo($soCanKiemTra)) {
    echo "25. Số $soCanKiemTra là số nguyên tố.";
} else {
    echo "25. Số $soCanKiemTra không phải là số nguyên tố.";
}
echo "<hr>";
// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function timSoDuongLN($Array) {
    $soduongLN = $Array[0];
    foreach ($Array as $Giatri) {
        if ($Giatri > $soduongLN && $Giatri > 0) {
            $soduongLN = $Giatri;
        }
    }
    return $soduongLN;
}
$Array = [11, 5, 98, 34, 20, 3, -7];
$soDuongLN = timSoDuongLN($Array);
echo "26. Số dương lớn nhất trong mảng là: $soDuongLN <hr>";
// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function timSoAmLN($ARRAY) {
    $soamLN = null;
    foreach ($ARRAY as $GiaTri) {
        if ($GiaTri <0){
        if ($GiaTri > $soamLN) {
            $soamLN = $GiaTri;
        }
    }
    }
    return $soamLN;
}
$ARRAY = [11, -5, -98, 34, -20, -3, -7];
$soAmLN = timSoAmLN($ARRAY);
echo "27. Số âm lớn nhất trong mảng là: $soAmLN <hr>";
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function tinhTongSoLe($n){
    $tong=0;
    for ($i=1; $i<= $n; $i++){
        if($i%2 !== 0){
            $tong+= $i;
        }
    }
    return $tong;
}
$n= 14;
$tinhTong = tinhTongSoLe($n);
echo "28. Tổng các số lẻ từ 1 đến $n là: " . $tinhTong;
echo "<hr>";

// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function FindsoChinhPhuong($a, $b) {
    $soChinhPhuong = array();
    for ($i = $a; $i <= $b; $i++) {
        $canBacHai = sqrt($i);
        if ($canBacHai == (int)$canBacHai) {
            $soChinhPhuong[] = $i;
        }
    }
    return $soChinhPhuong;
}

$a = 1;
$b = 50;
echo "29. <br>";
echo "Khoảng cho trước: $a đến $b <br>";
$KQ = FindsoChinhPhuong($a, $b);

if (!empty($ketQua)) {
    echo "Các số chính phương trong khoảng từ $a đến $b là: " . implode(', ', $KQ);
} else {
    echo "Không có số chính phương trong khoảng từ $a đến $b.";
}
echo "<hr>";

// 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function laChuoiCon($chuoiMe, $chuoiCon) {
    $doDaiChuoiChinh = strlen($chuoiMe);
    $doDaiChuoiCon = strlen($chuoiCon);

    for ($i = 0; $i <= $doDaiChuoiChinh - $doDaiChuoiCon; $i++) {
        $chuoiPhu = substr($chuoiMe, $i, $doDaiChuoiCon);
        if ($chuoiPhu == $chuoiCon) {
            return true;
        }
    }
    return false;
}
echo "30. <br>";
$chuoiMe= "Xin chào buổi tối mọi người";
$chuoiCon = "Hello N";
if (laChuoiCon($chuoiMe, $chuoiCon)) {
    echo " '$chuoiCon' là chuỗi con của '$chuoiMe' <br>";
} else {
    echo "'$chuoiCon' không là chuỗi con của '$chuoiMe' <br>";
}
?>
