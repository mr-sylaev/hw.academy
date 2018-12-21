<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обязательное ДЗ lesson 5</title>
</head>
<body>

    <style>
        table{
            border-collapse: collapse;
            border: 1px solid #000000;
        }
        td {
            border: 1px solid #000000;
        }
    </style>

    <!-- ================== 1 ================= -->

    <h2>Задание 1</h2>
    <p> С помощью условий и циклов выведите на экран таблицу умножения в удобочитаемом формате</p>

    <table>
        <tr>
            <?
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>";
                for ($k = 1; $k <= 10; $k++) {
                    $result = ($i * $k); // Результат умнажонения
                    echo  "$i * $k = " . $result . "<br>"; // Вывод Умножения с результатом
                    if ($stop == false) { // $stop если этой переменной нет, то заработает данный цикл, в какотором находит html код tr
                        if ($result == 5 * 10) {
                            echo "</tr>\n<tr>";
                            $stop = true; // создаем переменную $stop, чтобы в следующий раз, данное условие не заработало
                        }
                    }
                }
                echo "</td>\n";
            }
            ?>
        </tr>
    </table>

    <!--  ================ 2 ================  -->

    <h2>Задание 2</h2>
    <p>Задайте бесконечный цикл, который будет выводить на экран квадраты чисел с новой строчки.
        Если квадрат числа превысит 100, то прервите цикл и перейдите к метке после цикла,
        где будет вывод на экран сообщения "Цикл завершен, ваше величество></p>

    <?php $i = 1; ?>
    <?php while(true): ?>
        <p><?php echo "$i^2 = " . $result = ($i * $i); ?></p> <!-- Выводи результат на экран, а так же
            перезаписывает результат в переменную $result-->
        <?php if ($result == 100) goto message; ?> <!-- Если квадрат числа больше 100, то выведет message -->
        <?php $i++; ?>
    <?php endwhile; ?>

    <?php message: echo 'Цикл завершен, ваше величество!' ?>

</body>
</html>







