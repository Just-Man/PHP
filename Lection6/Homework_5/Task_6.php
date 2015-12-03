<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 21.11.15
 * Time: 10:19
 */

/*
    * Задача 6:
    * Да се състави програма, чрез която се въвежда изречение с отделни думи.
    * Като резултат на екрана да се извежда същия текст, но всяка отделна
    * дума да започва с главна буква, а следващите я букви да са малки.
    * Пример: супер яката задача
    * Изход: Супер Яката Задача
*/

//Enter values
$text = readline('Enter your text');

//Body
if (!function_exists('mb_ucwords'))
{
	function mb_ucwords($str)
	{
		return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
	}
}
$text = mb_ucwords($text);

//Print
echo $text;