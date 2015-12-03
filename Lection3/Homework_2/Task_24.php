<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 30.10.15
 * Time: 10:00
 */

//Enter value
$number=readline('Enter number');

//Body & print
$memNumber=$number;
$sum = 0;
while((int)$number != 0) {
$getLastDigit=$number % 10;
$sum = $sum * 10 + $getLastDigit;
$number=$number / 10;

}
if($sum == $memNumber) {
echo $memNumber. ' is palindrome number';
} else {
echo $memNumber. ' is not palindrome number';
}