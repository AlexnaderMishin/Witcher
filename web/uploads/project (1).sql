-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2021 г., 21:52
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
  `season` int(11) NOT NULL,
  `seria` int(11) NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `preview`, `name`, `season`, `seria`, `place`) VALUES
(10, 'ger1.jpg', '1.Начало Конца', 1, 1, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(11, 'renfri.jpg', '2.Начало Конца', 1, 2, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(12, 'yen1.jpg', '3.Начало Конца', 1, 3, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(13, '1572579260145620000.jpg', '4.Начало Конца', 1, 4, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(14, '3nd-geralt-poster-full-hd.jpg', '5.Начало Конца', 1, 5, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру.'),
(15, 'Ведьмак-2-сезон.jpg', '6', 1, 6, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру'),
(16, '1562644353_0_78_1502_923_600x0_80_0_0_0bbc5505ce250f6f87c7c74380b22c47.jpg', '7.Начало Конца', 1, 7, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру'),
(17, '2.jpg', '8.Начало Конца', 1, 8, 'Враждебные горожане и хитрая ведьма встречают Геральта в Блавикене. Цири выясняет, что ее королевство рушится, потому что Нильфгаард решает завоевать Цинтру');

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