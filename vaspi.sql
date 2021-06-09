-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 09 2021 г., 10:18
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vaspi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(1) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `aboutus`
--

INSERT INTO `aboutus` (`id`, `avatar`, `text`) VALUES
(1, 'img/maksim.bmp.png', 'Лонский Максим'),
(2, 'img/maksim.bmp.png', 'Лонский Максим');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(1) NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `background`, `name`, `text`, `user_id`) VALUES
(1, 'img/news1.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(2, 'img/news2.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(3, 'img/news3.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(4, 'img/news4.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(5, 'img/news5.jpg', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(6, 'img/news6.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(7, 'img/news1.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(8, 'img/news2.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(9, 'img/news3.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(10, 'img/news4.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(11, 'img/news5.jpg', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0),
(12, 'img/news6.png', 'Lorem ipsum', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti omnis soluta repellat ut laboriosam fugiat quis ipsum explicabo rerum eligendi, ducimus aliquam saepe? Veritatis obcaecati, tempore possimus molestiae fugit reiciendis.', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `login`, `email`, `password`) VALUES
(1, 'admin', 'admin@mail.ru', 'aga,aga');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
