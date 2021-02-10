-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 10 2021 г., 07:07
-- Версия сервера: 5.6.47
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Сериал'),
(2, 'Игры'),
(3, 'Анимации'),
(4, 'CD Project');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `preview` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `season` int(11) NOT NULL,
  `seria` int(11) NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `preview`, `name`, `description`, `season`, `seria`, `place`) VALUES
(10, 'one.jpg', '1. Начало Конца', 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.', 1, 1, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(11, 'two.jpg', '2. Четыре марки', 'Йеннифэр, терпящая издевательства и пренебрежение, неожиданно находит способ сбежать. Охота Геральта на «дьявола» идет не по плану. Цири ищет убежище среди людей', 1, 2, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(12, 'three.jpg', '3. Предательская луна', 'В королевстве, где свирепствует жестокий зверь, Геральт берется за дело, которое не закончил другой ведьмак. Огромной ценой Йеннифэр получает новое волшебное будущее.', 1, 3, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(13, 'four.jpg', '4. Банкеты, ублюдки и похороны', 'Вопреки здравому смыслу Геральт идет с Лютиком на королевский бал. Цири бродит по зачарованному лесу. Йеннифэр пытается защитить своих подопечных.', 1, 4, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(14, 'five.jpg', '5. Желания из бутылки', 'Невзирая на предупреждения, Йеннифэр ищет средство восстановить то, что она потеряла. Геральт случайно подвергает Лютика опасности. Ведутся активные поиски Цири.', 1, 5, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(15, 'six.jpg', '6. Редкие виды', 'Таинственный человек уговаривает Геральта присоединиться к охоте на разбушевавшегося дракона, в которой участвует и его знакомая. Цири сомневается, кому можно доверять.', 1, 6, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру'),
(16, 'seven.jpg', '7. Перед падением', 'Континент оказывается в опасности из-за растущей мощи Нильфгаарда. Йеннифэр возвращается к своему прошлому, а Геральт пересматривает свое отношение к Праву Неожиданности.', 1, 7, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру'),
(17, 'eath.jpg', '8. Нечто большее', 'Ужасающая свора монстров вывела Геральта из строя. Йеннифэр и ее друзья-маги готовятся дать отпор. Цири полагается на доброту незнакомки.', 1, 8, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `photo` text NOT NULL,
  `idCategory` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `text`, `photo`, `idCategory`, `timestamp`) VALUES
(1, 'Первая запись', 'Описание первой записи для теста', 'Тест вывода записей на странице  yii2', '1.png', 1, '2021-01-28 10:21:44'),
(2, 'Второй сезон', 'Продолжение саги о ведьмаке', 'Выход второго сезона назначен на 2021г.', '1.png', 1, '0000-00-00 00:00:00'),
(3, 'CyberPunk 2077', 'Полных крах', 'Полный провал при выходе новой игры от CD Project Red', '1.png', 4, '2021-01-29 10:29:43');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `sub` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `admin`, `sub`) VALUES
(1, 'Alex', 'qwerty@mail.ru', 'qwerty123', 1, 1),
(2, 'Lexa', 'lexa@mail.ru', 'qwerty', 0, 1),
(3, 'Anton', 'anton@mail.ru', 'qwerty', 0, 0),
(4, 'kek', 'kek', 'qwerty123', 0, 0),
(5, 'user', 'kek@mail.ru', 'qwerty123', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idCategory_2` (`idCategory`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
