<?
echo "<h1>Дополнительное ДЗ</h1>";
echo "<h2>Задание 1</h2>";
/* Написать функцию, которая будет принимать один аргумент year и возвращать TRUE,
   если год високосный, и FALSE, если не високосный. Не используем циклы и развилки
*/
// Список высокосных год: 2012, 2016, 2020, 2024 и т.д.


function highНear($year) {
	$numResult = ($year % 4 == 0 || $year % 400 == 0); // Если Год высокосный тот, в переменную запишиется 1 (boolean)
	$array = ['' => "FALSE", 1 => "TRUE"]; // Пустая строка - FALSE, Ключ 1 - True
	return $array["$numResult"];
}

echo highНear(2016);




// ** Более профессиональное вычисление Высокосного года **//

// function highНear($year) {
//     $time = mktime(1, 1, 1, 1, 1, $year);
//     $numResult = date("L", $time); // Выдает 1 и 0

//     $boolResult = [0 => "FALSE", 1 => "TRUE"]; // Бинарные ключи массива, являются Boolean Значениями
//     return $boolResult[$numResult];
// }

// echo highНear(2016);