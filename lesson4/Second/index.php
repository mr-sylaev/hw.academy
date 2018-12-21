<?
echo "<h1>Дополнительное ДЗ</h1>";
/*  1. Изучить GET и POST запросы
	2. Создать массив, записать в него их основные отличия и вывести этот массив на экран
	3. Создать форму с тремя инпутами для ввода имени, фамилии и возраста
	4. Через GET-запрос вывести на экран строку " Привет, меня зовут * * * * * , мой возраст - **", где вместо звездочек будут подставляться соответствующие значения из инпутов
	5. Создать еще 1 форму и сделать то же самое, но через POST-запрос
*/


	$array = ['$_POST - запрос который не возможно увидеть при отправки, через этот запрос можно от править пароль, и никто ее не увидит. Этот метод использует для отправки Комментов, Аутентицикации, размещение Новых постов и т.д.',
			  '$_GET - запрос который передает переменную в URL строку, Но через этот запрос крайне нельзя отправлять пароли, так вся инфа отображается в URL адресе, до 255 символов. Чаще всего этот запрос используют при пагинации, поиска на сайте, и для категории сайта'];

	var_dump($array);
	echo "<hr><br>";
?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- GET запрос -->

<h3>GET запрос</h3>
<form action="index.php" method="GET">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="lastname" placeholder="Фамилие">
    <input type="text" name="age" placeholder="Возраст">
    <input type="submit" name="done" value="Отправить">
</form>

<?
	$name = $_GET['name'];
	$lastname = $_GET['lastname'];
	$age = $_GET['age'];

    if ( isset($_GET['done']) ) {
   		echo "Привет, меня зовут $name $lastname, мой возраст - $age <br><br>";
    }
?>

<br><hr>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- POST запрос -->

<h3>POST запрос</h3>
<form action="index.php" method="POST">
    <input type="text" name="post_name" placeholder="Имя">
    <input type="text" name="post_last-name" placeholder="Фамилие">
    <input type="text" name="post_age" placeholder="Возраст">
    <input type="submit" name="post_done" value="Отправить">
</form>

<?
	$post_name = $_POST['post_name'];
	$post_lastname = $_POST['post_lastname'];
	$post_age = $_POST['post_age'];

    if ( isset($_POST['post_done']) ) {
        echo "Привет, меня зовут $post_name $post_lastname, мой возраст - $post_age <br><br>";
    }
?>