<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 02.12.15
 * Time: 08:47
 */

$start = microtime();
$maxLen = 0;
$countChar = 0;
$maxTimes = 0;
$word = '';
$char = '';

$str = 'The quick brown fox jumped over the lazy brown dog';
$words = explode(' ', $str);

$lenWords = count($words);
for ($i = 0; $i < $lenWords ; $i += 1) {
    $lenWord = strlen($words[$i]);
    if ($lenWord > $maxLen) {
        $maxLen = $lenWord;
        $word = $words[$i];
    }
}
$lenStr = strlen($str);
for ($i = 0; $i < $lenStr ; $i += 1) {
    for ($j = 0; $j < $lenStr ; $j += 1) {
        if ($str[$i] == $str[$j] && $str[$i] != ' ' ) {
            $countChar += 1;
        }
    }
    if ($countChar > $maxTimes) {
        $maxTimes = $countChar;
        $char = $str[$i];
    }
    $countChar = 0;
}

echo "Longest word is $word with $maxLen chars" , PHP_EOL;
echo "Most repeated char is '$char' with $maxTimes repeats" , PHP_EOL;

$end = microtime();
echo $end - $start;