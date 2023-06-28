-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 28 2023 г., 20:45
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `datatask`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registrtabel`
--

CREATE TABLE `registrtabel` (
  `iduser` int(11) NOT NULL,
  `emailuser` varchar(100) DEFAULT NULL,
  `passworduser` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `registrtabel`
--

INSERT INTO `registrtabel` (`iduser`, `emailuser`, `passworduser`) VALUES
(4, 'kost@mail.ru', 1231312),
(5, 'kosta@mail.ru', 111111),
(6, 'logg@mail.ru', 123456),
(7, '121341342@mail.ru', 123456),
(26, 'kost@mail.ru', 2147483647),
(33, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tasklist`
--

CREATE TABLE `tasklist` (
  `Id` int(11) NOT NULL,
  `TaskText` varchar(255) NOT NULL,
  `TaskDate` date NOT NULL,
  `TaskTime` time NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tasklist`
--

INSERT INTO `tasklist` (`Id`, `TaskText`, `TaskDate`, `TaskTime`, `Email`) VALUES
(1, 'Пойти в пень', '2023-04-12', '22:19:00', 'brusnicyn01@bk.ru'),
(2, 'Пойти в школу', '2023-04-12', '22:19:00', 'kostabrusnicyn@bk.ru'),
(3, 'Пойти в школу', '2023-05-26', '11:31:00', 'brusnicyn01@bk.ru'),
(4, 'Пойти в пень', '2023-05-11', '17:42:00', 'brusnicyn01@bk.ru'),
(6, 'Пойти в школу', '2023-05-11', '21:16:00', 'logg@mail.ru'),
(7, 'кенвапртваыпры', '0000-00-00', '00:00:00', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registrtabel`
--
ALTER TABLE `registrtabel`
  ADD PRIMARY KEY (`iduser`);

--
-- Индексы таблицы `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registrtabel`
--
ALTER TABLE `registrtabel`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
