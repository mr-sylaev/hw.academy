-- - Посчитать количество книг в таблице, которые были прочитаны до 2010 года
SELECT COUNT(*) FROM homework.books WHERE `year` < 2010;

-- - Посчитать количество книг, которые есть у каждого автора (Подсказка - использовать GROUP BY) и вывести
--   автора и количество
SELECT `author`, count(*) FROM homework.books GROUP BY `author`;

-- - Обновить rate, увеличив его на 1 для всех записей, которые были прочитаны НЕ в 2012 году
UPDATE homework.books SET `rate`= `rate`+1 WHERE `year` != 2015;

-- - Посчитать количество книг, прочитанных за каждый год, и вывести год и количество с сортировкой по
--   количеству в убывающем порядке
SELECT `year`, count(*) as `count` FROM homework.books GROUP BY `year` ORDER BY `count` DESC;

-- - Удалить записи с rate<5
DELETE FROM homework.books WHERE `rate`<5;

-- - Удалить таблицу books
DROP TABLE homework.books;