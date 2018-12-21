-- 

-- 1. Создать базу данных homework
CREATE SCHEMA `homework` SET DEFAULT CHARACTER SET utf8;

-- 2. Создать в БД homework таблицу books, которая должна состоять из столбцов - id, title, author, rate, year.
-- Тип данных и размер каждого столбца определить самостоятельно.
-- Id - первичный ключ, title - название книги, author - автор, rate - ваша оценка по 10-бальной шкале,
-- year - год, когда вы прочитали книгу
CREATE TABLE homework.books (
	`id` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(50) NOT NULL,
	`author` VARCHAR(50) NOT NULL,
	`rate` INT(1) NOT NULL,
	`year` INT NOT NULL,
    PRIMARY KEY(`id`))
ENGINE = InnoDB;

-- 3. Заполнить таблицу books 10-ю записями
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Богатый папа, Бедный папа', 'Роберт Кийосаки', '10', '2018');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Думай и Богатей', 'Наполеон Хилл', '7', '2018');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Тайм менеджмент', 'Глею Архангельский', '7', '2017');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Сила привычки', 'Чарльз Дахигг', '5', '2016');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Искусство Пофигизма', 'Марк Мэнсон', '5', '2015');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Книга 6', 'Автор книги 6', '4', '2014');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Книга 7', 'Автор книги 7', '3', '2012');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Книга 8', 'Автор книги 8', '2', '2010');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Книга 9', 'Автор книги 9', '1', '2011');
INSERT INTO homework.books (`title`, `author`, `rate`, `year`) VALUES ('Книга 10', 'Автор книги 10', '4', '2008');

-- 4. Добавить столбец country типа Строка
ALTER TABLE homework.books ADD country VARCHAR(50);

-- 5. Изменить тип столбца country на целое число
ALTER TABLE homework.books MODIFY country INT;

-- 6. Удалить столбец country
ALTER TABLE homework.books DROP country;

-- 7. Выполнить следующие выборки:
-- - Выбрать все записи и все столбцы из таблицы
SELECT * FROM homework.books;

-- - Выбрать столбцы title и author у всех записей
SELECT `title`, `author` FROM homework.books;

-- - Выбрать записи, у которых rate>5
SELECT * FROM homework.books WHERE rate>5;

-- - Выбрать все записи с сортировкой по rate в убывающем порядке
SELECT * FROM homework.books ORDER BY rate DESC;

-- - Выбрать все записи, у которых rate>7 и year больше 2015 с сортировкой по year в восходящем порядке
SELECT * FROM homework.books WHERE `rate` > 7 AND `year` > 2015 ORDER BY `year` ASC;