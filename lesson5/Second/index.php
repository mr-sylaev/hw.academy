<?
echo "<h1>Дополнительное ДЗ</h1>";
/*  1. Используя циклы и условия, вывести на экран все простые числа, находящиеся в диапазоне от 1 до 100
    2. Записать все эти числа в массив
    3. С помощью конструкции foreach вывести на экран каждый элемент массива и
    фразу " - это простое число №...". К примеру, "2 - это просто число №1", "3 - это простое число №2" и т.д.
 */

$result = [];
for ($i = 1; $i <= 100; $i++) {
    for($k = 2; $k <= $i && $i % $k != 0; $k++ ) { // Проверяем остается остакток при делении
    }
    if ($i == $k) { // Одинаковые цифры - это простые числа
        echo $k . ", "; // Вывод все числа через запятую
        $result[] = $k; // Добавляем в массив
    }
}

foreach ($result as $key => $value) {
    echo "<br>" . $value . " - это просто число №" . ($key + 1); // Выводим все числа из массива
}

?>