<br>câu 1<br> 
<?php //Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.

function checkEven($number) {

    if ($number % 2 == 0) {

        return "Số '$number'  là số chẵn";
    } else {

        return "Số '$number' không là số chẵn";
    }
}

$number = 10;
print( checkEven($number));
?>





<br> câu 2<br>
<?php //Viết chương trình PHP để tính tổng của các số từ 1 đến n.

function total($n) {

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        $sum += $i;
    }

    return $sum;
}

$n = 99;
$a = total($n);
echo "Tổng các số từ 1 đến $n  là: $a ";
?>





<br> câu 3<br>
<?php //Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.

function multiplication() {

    for ($i = 1; $i <= 10; $i++) {

        echo "Bảng cửu chương của " . $i . "<br>";

        for ($j = 1; $j <= 10; $j++) {

            $result = $i * $j;

            echo $i . " x " . $j . " = " . $result . "<br>";
        }
    }
}
multiplication()
?>





<br> câu 4<br>
<?php //Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.


function checkArr($arr, $n) {
    $check = strpos($arr, $n);

    if ($check == true) {

        return "Chuỗi '$arr'  chứa từ  '$n' ";
    } else {

        return "Chuỗi '$arr' không chứa từ '$n' ";
    }
}


echo checkArr("Linh đã hoàn thành bài tập PHP.", "Linh")

?>





<br> câu 5<br>
<?php //Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.

function seekMax($arr) {
    $maxNumber = $arr[0];

    for ($i = 1; $i < count($arr) ; $i++) {

        if ($arr[$i] > $maxNumber) {
            $maxNumber = $arr[$i];
        }
    }

    echo "Giá trị lớn nhất trong mảng là: $maxNumber<br>";
}

function seekMin($arr) {
    $minNumber = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {

        if ($arr[$i] < $minNumber) {

            $minNumber = $arr[$i];
        }
    }

    echo "Giá trị nhỏ nhất trong mảng là: $minNumber";
}


$arr = array(2, 95, 95, 78, 33, 73, 45);
print(seekMax($arr));
print(seekMin($arr));
?>





<br> câu 6 <br>
<?php //Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.

function sortAsc($arr) { 

    for ($i = 0; $i < count($arr) - 1; $i++) {

        for ($j = $i + 1; $j < count($arr); $j++) {

            if ($arr[$j] < $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}

// Khai báo một mảng
$arr = array(2, 95, 95, 78, 33, 73, 45);

// Gán biến cho hàm
$arrAfterSort = sortAsc($arr);

// In kết quả
echo "Mảng sau khi sắp xếp: ";
echo implode(', ', $arrAfterSort); 

// có thể dùng: foreach ($arrAfterSort as $value) { echo "Mảng sau khi sắp xếp:  ";   echo "$value ";
?>





<br> câu 7 <br>
<?php //Viết chương trình PHP để tính giai thừa của một số nguyên dương.
//C1: dùng vòng for:
function redundant($n) {
    if ($n == 0 || $n == 1) {

        return 1;
    } else {
        $factorial = 1;
        for($i = 2; $i < $n; $i++ ) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
}

// Truyền giá trị cho biến n
$n = 5;

// Tính giai thừa
$rdd = redundant($n);

// In kết quả
echo "Cách 1: Giai thừa của $n là: $rdd <br>";


// C2: dùng đệ quy
function redundunt_by_recursion($a) {
    if ($a == 0) {
        return 1;
    } else {
        return $a * redundunt_by_recursion($a - 1); 
    }
}
echo "\n Cách 2: Giai thừa của $a là: ";
$a = 8;
echo redundunt_by_recursion($a); 
// Không hiểu sao em truyền giá trị cho biến nhưng đến khi màn hình hiển thị khác với giá trị e truyền vào :v
// Tuy nhiên đáp số vẫn tính đúng á
?>





<br> Câu 8 <br>
<?php //Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function checkPrime($n) {

    if ($n < 2) {

        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {

        if ($n % $i == 0) {

            return false;
        }
    }

    return true;
}

function checkPrimeInField($start, $end) {
    $prime = [];

    for ($i = $start; $i <= $end; $i++) {

        if (checkPrime($i)) {

            $prime[] = $i;
        }
    }

    return $prime;
}

// Khoảng số cần kiểm tra
$start = 1;
$end = 100;

// Tìm số nguyên tố trong khoảng
$primeArr= checkPrimeInField($start, $end);

// In kết quả
echo "Các số nguyên tố trong khoảng $start đến $end là: ";

foreach ($primeArr as $n) {
    echo "$n ";
}
// có thể dùng: echo "Mảng sau khi sắp xếp: "; echo implode(', ', $arrAfterSort); 
// để chuyển mảng thành chuỗi
?>





<br> câu 9 <br>
<?php //Viết chương trình PHP để tính tổng của các số trong một mảng.
// cách 1: dùng foreach
function totalArr($arr) {

    $sum = 0;

    foreach ($arr as $num) {

        $sum += $num;
    }

    return $sum;
}

// Mảng số
$arr = array(2, 5, 2, 0, 8, 9, 3);

// Tính tổng của mảng
$totalArr = totalArr($arr);

// In kết quả
echo "Cách 1: Tổng của mảng là: $totalArr <br>";



// Cách 2: dùng for:
function totalArr_by_for($arrFor) {
    $sum = 0;
    for($i = 0; $i < count($arrFor); $i++) {
        $sum += $arrFor[$i];
    }
    return $sum;
}
echo "Cách 2: Tổng của mảng là: ";
$arrFor = array(2, 5, 2, 0, 8, 9, 3);
print(totalArr_by_for($arrFor));
// Thực ra 2 cách tư duy giống nhau nhưng em muốn màu mè thôi :>
?>





<br> câu 10 <br>
<?php //Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. 
// dãy số trong đó mỗi số Fibonacci có được bằng cách cộng hai số đứng trước.

function isFibonacciField_By_For($start, $end)
{
    $arrFibo = []; // Khởi tạo mảng
    $arrFibo[0] = 0; // khởi tạo giá trị, như kiểu tập training
    $arrFibo[1] = 1;
    for ($i = 2; ;$i++) {
        $arrFibo[$i] = $arrFibo[$i - 1] + $arrFibo[$i - 2];
        if ($arrFibo[$i] > $end) {
            break;
        }
        if ($arrFibo[$i] >= $start) {
            echo $arrFibo[$i] . " ";
        }
    }
}

// Khoảng số Fibonacci cần in
$start = 10;
$end = 100;

// In các số Fibonacci trong khoảng
echo "Cách 1: Dùng vòng for: Dãy số Fibonacci trong khoảng $start đến $end là:  ";
isFibonacciField_By_For($start, $end);
echo "<br>";

function isFibonacciField_By_While($start, $end) {
    $arrFibo = []; 
    $arrFibo[0] = 0; 
    $arrFibo[1] = 1;
    $i = 2;
    while ($arrFibo[$i - 1] + $arrFibo[$i - 2] <= $end) {
        $arrFibo[$i] = $arrFibo[$i - 1] + $arrFibo[$i - 2];
        if ($arrFibo[$i] >= $start) {
            echo $arrFibo[$i] . " ";
        }
        $i++;
    }
}

// Khoảng số Fibonacci cần in
$start = 10;
$end = 100;

// In các số Fibonacci trong khoảng
echo "Cách 2: Dùng vòng while: Dãy số Fibonacci trong khoảng $start đến $end là: ";
isFibonacciField_By_While($start, $end);
//2 cách tư duy giống nhau nhưng e màu mè tí hihi =)))
?>






<br> câu 11 <br>
<?php //Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
//Số Armstrong là số có đặc điểm là tổng lũy thừa các chữ số của nó bằng chính nó
function isArmstrong($number) {
    $sum = 0;
    $num = $number;
    $n = strlen($num);
    for ($i = 0; $i < $n; ++$i) {
        $digit = (int)substr($num, $i, 1);
        $sum += pow($digit, $n);
    }
    if ($sum == $number) {
        echo "$number là số Armstrong";
    } else {
        echo "$number không phải là số Armstrong";
    }
}

// Số cần kiểm tra
$number = 153;

// Kiểm tra số Armstrong
print(isArmstrong($number));
?>





<br> câu 12 <br>
<?php //Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.

function insertElement($array, $element, $position) {
    $count = count($array);
    for ($i = $count - 1; $i >= $position; $i--) {
        $array[$i + 1] = $array[$i];
    }
    $array[$position] = $element;
    return $array;
}

$array = array(1,4,2,8,9,3);
$final_array = insertElement($array, 3, 2);
echo "Mảng sau khi thêm vào là: ";
foreach ($final_array as $value ) {
    echo $value. " ";
}

?>





<br> câu 13 <br>
<?php //Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeRepeatedElement ( $arr) {
    $finalArr = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array($arr[$i], $finalArr)) { //Cái này e dùng hàm available nhưng e có dùng vòng for nên vẫn pass nha anh :>
            array_push($finalArr, $arr[$i]);
        }
    }
    return $finalArr;  
}

$arr = array(1, 2, 3, 2, 4, 5, 3);
$result = removeRepeatedElement($arr);
foreach($result as $value) {
    echo $value. " ";
}
?>




<br> câu 14 <br>
<?php
//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function checkPositionElement($arr, $element)
{
    $position = array();

    // Duyệt qua mảng và ghi nhớ vị trí của phần tử
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] === $element) {

            array_push($position, $i); // $position[] = $i; thêm giá trị của biến i vào mảng position
        }
    }

    return $position;
}

// Mảng ban đầu
$arr = array(1, 2, 3, 2, 4, 3, 5, 1);
$element = 2;

// Tìm vị trí của phần tử trong mảng
$position = checkPositionElement($arr, $element);

// Hiển thị vị trí của phần tử
if (count($position) > 0) {

    echo "Vị trí của phần tử " . $element . " trong mảng là: ";

    echo implode(", ", $position);
} else {

    echo "Phần tử " . $element . " không tồn tại trong mảng.";
}

?>





<br> câu 15 <br>
<?php //Viết chương trình PHP để đảo ngược một chuỗi.

function reverseStr($str)
{
    $resultReverse = '';

    $lenStr = strlen($str);

    for ($i = $lenStr - 1; $i >= 0; $i--) {

        $resultReverse .= $str[$i]; 
        // $resultReverse = $resultReverse . $str[$i]; => thêm ký tự $str[$i] vào cuối chuỗi $resultReverse
    }

    return  $resultReverse;
}

$str = "Hello, World!";
$result  = reverseStr($str);
echo $result;

?>




<br> câu 16 <br>
<?php //Viết chương trình PHP để tính số lượng phần tử trong một mảng.

function countElements($array)
{
    $count = count($array);
    return $count;
}

// Mảng 
$array = array(1, 2, 3, 4, 5);

// đếm số lượng phần tử trong mảng
$elementCount = countElements($array);

// Hiển thị số lượng phần tử
echo "Số lượng phần tử trong mảng là: " . $elementCount;

?>





<br> câu 17 <br>
<?php //Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. 
// e k hiểu nên anh cho e pass câu này nhé :> Câu này e tham khảo bạn vì k hiểu câu hỏi, hỏi bạn xong e cũng k hiểu cách làm luôn ._.

function isPalindrome($str) {
    // Loại bỏ các ký tự không phải chữ cái và chuyển đổi chuỗi về chữ thường
    $cleanStr = preg_replace("/[^A-Za-z]/", '', strtolower($str));

    // So sánh chuỗi gốc với chuỗi đảo ngược
    return $cleanStr === strrev($cleanStr);
}

// Chuỗi ban đầu
$originalString = "A man, a plan, a canal: Panama";

// Kiểm tra xem chuỗi có phải là chuỗi Palindrome hay không
if (isPalindrome($originalString)) {

    echo "Chuỗi \"" . $originalString . "\" là chuỗi Palindrome.";
} else {

    echo "Chuỗi \"" . $originalString . "\" không là chuỗi Palindrome.";
}

?>





<br> câu 18 <br>
<?php //Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.

function countOccurrences($array, $element) {

    $count = 0;
    // Duyệt qua mảng và tăng biến đếm mỗi khi phần tử xuất hiện
    foreach ($array as $value) { // dùng for cũng được

        if ($value === $element) {

            $count++;
        }
    }

    return $count;
}


$arr = array(2, 5, 19, 73, 37, 4, 73, 4, 99);
$elementToCount = 73;

$occurrences = countOccurrences($arr, $elementToCount);

echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;
?>




<br> câu 19 <br>
<?php //Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortByDesc ($arr) {
for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] > $arr[$i]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
}
return $arr;
}
$arr = array(9,14,37,73,89,99);
$descArr = sortByDesc ($arr);
echo " mảng được sắp xếp lại là: ";
foreach($descArr as $value) {
    echo $value. " ";
}
?>





<br> câu 20 <br>
<?php //Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.

function addElement($arr, $element, $position) {

    if ($position == "start") {

        array_unshift($arr, $element);
        return $arr;
    } else if ($position == "end") {

        array_push($arr, $element);
        return $arr;
    } else  {
        return "Hãy nhập đúng cú pháp 'start' hoặc 'end' để hàm được thực thi";
    }
}

$myArray = array("Nghiêm", "Vũ", "Hoàng");

$newElement = "Long aka MCK - Nger";

// Thêm phần tử vào cuối mảng
$correct1 = addElement($myArray, $newElement, "end");

// Thêm phần tử vào đầu mảng
$correct2 = addElement($myArray, $newElement, "start");
 
// Thực thi sai cú pháp
$incorrect = addElement($myArray, $newElement, "sai");
// Hiển thị mảng

print_r($correct1);
echo "<br>";
print_r($correct2);
echo "<br>";
print_r($incorrect);
?>





<br> câu 21 <br>
<?php
//  //Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function C1_findSecondLargest($arr) {

    rsort($arr);

    return $arr[1];
}

$array = array(3, 1, 4, 1, 5, 9, 2, 8, 5, 3, 5);

$secondLargest = C1_findSecondLargest($array);

echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>



<?php
function C2_findSecondLargest($arr) {
    $max = max($arr);
    unset($arr[array_search($max, $arr)]); 
    return max($arr);
}
 
$arr = array(1, 2, 3, 4, 5);

echo "Số lớn thứ hai là: " . C2_findSecondLargest($arr);
?>





<br> câu 22 <br>
<?php //Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
//C1: dùng đệ quy
function gcd($a, $b)
{

    if ($b == 0) {

        return $a;
    } else {

        return gcd($b, $a % $b);
    }
}

function lcm($a, $b)
{

    return ($a * $b) / gcd($a, $b);
}

$num1 = 10;
$num2 = 12;

echo "Ước chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . gcd($num1, $num2) . "<br>";
echo "Bội chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . lcm($num1, $num2);



//C2: Dùng gán biến temporary
function ucln($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function bcnn($a, $b) {
    return ($a * $b) / ucln($a, $b);
}

$a = 5;
$b = 10;

echo "Ước chung lớn nhất của " . $a . " và " . $b . " là: " . ucln($a, $b). "<br>";
echo "<br>";
echo "Bội chung nhỏ nhất của " . $a . " và " . $b . " là: " . bcnn($a, $b);

?>





<br> câu 23 <br> 
<?php //Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
// số hoàn hảo là số nguyên dương mà tổng các ước nguyên dương thực sự của nó bằng chính nó
function isPerfectNumber($num) {
    $sum = 0;

    for ($i = 1; $i <= $num / 2; $i++) {

        if ($num % $i == 0) {

            $sum += $i;
        }
    }

    if ($sum == $num) {

        echo $num . " là số hoàn hảo";
    } else {

        echo $num . " không phải là số hoàn hảo";
    }
}
print( isPerfectNumber(28))
?>





<br> câu 24 <br>
<?php //Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.

function findLargestOdd($arr) {

    $largestOdd = null;

    foreach ($arr as $num) {

        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {

            $largestOdd = $num;
        }
    }

    return $largestOdd;
}

$myArray = array(2, 4, 6, 10, 9, 3, 5, 7);

$largestOdd = findLargestOdd($myArray);

echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd; 


// Dùng vòng for:

?>



<br> câu 25 <br>
<?php
function isPrimeNumber($num) {

    if ($num <= 1) {

        echo "Nhập lại số đi ạ";
    }

    for ($i = 2; $i <= sqrt($num); $i++) {

        if ($num % $i == 0) {

            echo "$num không phải số nguyên tố";
        }
    }

    echo "$num là số nguyên tố";
}

print(isPrimeNumber(19))
?>






<br> câu 26 <br>
<?php

function findLargestPositive($arr) {

    $largestPositive = null;

    foreach ($arr as $num) {

        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {

            $largestPositive = $num;
        }
    }

    return $largestPositive;
}

$myArray = array(-2, 4, 6, -8, 9, 3, -5, 7);

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($myArray);

// Hiển thị số dương lớn nhất
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;

?>





<br> câu 27 <br> 
<?php //Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. 

function findLargestNegative($arr) {

    $largestNegative = null;

    foreach ($arr as $num) {

        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {

            $largestNegative = $num;
        }
    }

    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
}

$myArray = array(2, -4, 6, -8, -9, 3, -5, 7);
print(findLargestNegative($myArray))

?>





<br> câu 28 <br>
<?php //Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.

function sumOddNumbers($n) {

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 != 0) {

            $sum += $i;
        }
    }

    return $sum;
}

$n = 10;

// Tính tổng các số lẻ từ 1 đến n
$sum = sumOddNumbers($n);

// Hiển thị tổng các số lẻ
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

?>






<br> câu 29 <br>
<?php // Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
// Cách Tân
function findPerfectSquares($start, $end) {

    $perfectSquares = array();

    for ($i = $start; $i <= $end; $i++) {

        if (sqrt($i) == floor(sqrt($i))) {

            array_push($perfectSquares, $i);
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 100;

// Tìm số chính phương trong khoảng từ $start đến $end
$perfectSquares = findPerfectSquares($start, $end);

// Hiển thị số chính phương
echo "Các số chính phương trong khoảng từ " . $start . " đến " . $end . " là: ";

foreach ($perfectSquares as $num) {

    echo $num . " ";
}

?>







<br> câu 30 <br>
<?php //Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.

function isSubstring($string, $substring)

{
    if (strpos($string, $substring) === false) {

        return false;
    } else {

        return true;
    }
}

$string = "Hello world";
$substring = "52HzBlue";

// Kiểm tra xem $substring có phải là chuỗi con của $string hay không
if (isSubstring($string, $substring)) {

    echo "Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {

    echo "Chuỗi '" . $substring . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}
