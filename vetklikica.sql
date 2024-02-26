-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2024 г., 11:13
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vetklikica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animals`
--

CREATE TABLE `animals` (
  `id_an` int NOT NULL,
  `nickname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `view` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `breed` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_of_birth` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `neutered` tinyint(1) NOT NULL,
  `weight_kg` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `info` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_ow` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `animals`
--

INSERT INTO `animals` (`id_an`, `nickname`, `view`, `breed`, `date_of_birth`, `neutered`, `weight_kg`, `gender`, `color`, `info`, `id_ow`) VALUES
(1, 'Алексон', 'Кошка', 'Шотландская', '2020', 1, '5', 'М', 'Белый', 'Чихает,выделение из глаз', 1),
(2, 'Билайн', 'Морская свинка', 'Альпака', '2022', 0, '2', 'М', 'Темный шоколад', 'Часто чешется, на коже гнойники', 2),
(3, 'Флора', 'Ящерица', 'Бородатая агама', '2019', 0, '2', 'Ж', 'Желтый', 'Помутнение глазного яблока', 3),
(4, 'Пфайферон', 'Попугай', 'Какаду', '2015', 0, '1', 'М', 'Белый', 'Пух сильно сыпется', 4),
(5, 'Джессика', 'Собака', 'Той-терьер', '2016', 0, '3', 'Ж', 'Черный', 'Кашель', 5),
(6, 'Фрейя', 'Кошка', 'Манчкин', '2019', 1, '6', 'Ж', 'Белый', 'Зубной налет, покраснение десен', 6),
(7, 'Моритцон', 'Шиншилла', 'Ангорская', '2020', 0, '1', 'Ж', 'Фиолет', 'Температура, тяжелое дыхание с хрипами', 7),
(8, 'Бобон', 'Собака', 'Бигль', '2022', 1, '4', 'М', 'Рыжий', 'Жажда, учащенное мочеиспускание', 8),
(9, 'Петя', 'Свинья', 'Мини пиг', '2018', 1, '4', 'М', 'Розовый', 'Сломана лапа', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `make_an_appointment`
--

CREATE TABLE `make_an_appointment` (
  `id_m` int NOT NULL,
  `dateM` date NOT NULL,
  `timeM` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_ow` int NOT NULL,
  `id_an` int NOT NULL,
  `id_ser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `make_an_appointment`
--

INSERT INTO `make_an_appointment` (`id_m`, `dateM`, `timeM`, `id_ow`, `id_an`, `id_ser`) VALUES
(1, '2024-01-11', '12.00', 1, 1, 1),
(2, '2024-01-11', '13.00', 2, 2, 2),
(3, '2024-01-12', '14.00', 3, 3, 3),
(4, '2024-01-12', '15.00', 4, 4, 4),
(5, '2024-01-12', '16.00', 5, 5, 5),
(6, '2024-01-14', '12.00', 6, 6, 6),
(7, '2024-01-14', '13.00', 7, 7, 7),
(8, '2024-01-14', '16.00', 8, 8, 8),
(9, '2024-01-17', '12.00', 9, 9, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `medicines`
--

CREATE TABLE `medicines` (
  `id_m` int NOT NULL,
  `nameM` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `instructions` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `amount_med` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `medicines`
--

INSERT INTO `medicines` (`id_m`, `nameM`, `instructions`, `price`, `amount_med`) VALUES
(1, 'Антибиотики', 'Принять внутрь', '700', '1'),
(2, 'Ушные капли', 'Тампоном смоченным каплями ', '600', '30'),
(3, 'Антибиотики', 'Принять внутрь', '700', '1'),
(4, 'Корм', '2 раза в день менять', '1200', '20'),
(5, 'Уколы', 'Внутривенно 2 раза в день', '400', '7'),
(6, 'Антибиотики', 'Принять внутрь', '700', '1'),
(7, 'Таблетки', '3 раза в день', '550', '14'),
(8, 'Инсулин', 'Внутривенно', '430', '1'),
(9, 'Антибиотики', 'Внутривенно', '500', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `owners`
--

CREATE TABLE `owners` (
  `id_ow` int NOT NULL,
  `familyO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nameO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fatherO` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephoneO` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `owners`
--

INSERT INTO `owners` (`id_ow`, `familyO`, `nameO`, `fatherO`, `age`, `address`, `telephoneO`, `email`) VALUES
(1, 'Фомченко', 'Никита', 'Алексеевич', '21', 'ул.Первомайская', '89281962536', 'fomchenko@bk.ru'),
(2, 'Горкавчук', 'Анастасия', 'Владимировна', '19', 'пер.1-й новый', '89081778101', 'gorkavchuk@mail.ru'),
(3, 'Пухненкова', 'Ангелина', 'Борисовна', '19', 'пер.14-й новый', '89081425398', 'puh.2005@bk.ru'),
(4, 'Маркина', 'Алина', 'Константиновна', '18', 'пер. 1-й новый', '89281478596', 'markina222@mail.ru'),
(5, 'Савичев', 'Александр', 'Валерьевич', '25', 'ул.Александровская', '89051243567', 'saval@gmail.ru'),
(6, 'Дешин', 'Максим', 'Сергеевич', '18', 'ул.Фрунзе', '89526985478', 'diesh@mail.ru'),
(7, 'Анцыбор', 'Артем', 'Артемович', '17', 'пер.15-й новый', '89515198416', 'antch2006@gmail.com'),
(8, 'Фаст', 'Марина', 'Аркадьевна', '27', 'ул.Дзержинского', '89043451274', 'fastmarina@mail.ru'),
(9, 'Грокавчук', 'Владимир', 'Николаевич', '45', 'пер. 1-й новый', '89855896588', 'grrkav@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `id_dol` int NOT NULL,
  `nameP` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bet` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_vet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id_dol`, `nameP`, `bet`, `id_vet`) VALUES
(1, 'Зоотехник', '700', 1),
(2, 'Врач', '2000', 2),
(3, 'Фельдшер', '2000', 3),
(4, 'Ассистент', '1500', 4),
(5, 'Консультант', '1200', 5),
(6, 'Санитарный врач', '1000', 6),
(7, 'Зоотехник', '700', 7),
(8, 'Врач', '2000', 8),
(9, 'Врач', '2000', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id_ser` int NOT NULL,
  `nameS` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `diagnostics` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `treatmentS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `priceS` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_m` int NOT NULL,
  `id_vet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id_ser`, `nameS`, `diagnostics`, `treatmentS`, `priceS`, `id_m`, `id_vet`) VALUES
(1, 'Кальцивироз', 'Анализ крови,ПЦР-диагностика', 'Симптоматическая терапия, принятие антибиотиков', '1000', 1, 1),
(2, 'Вши', 'Анализ', 'Препараты на основе ивермектина', '700', 2, 2),
(3, 'Пенофтальмит', 'Осмотр', 'Лечение антибиотиками', '700', 3, 3),
(4, 'Облысение', 'Анализ на паразитов или инфекций', 'Обработка клетки, самой птицы,подбор нового корма', '600', 4, 4),
(5, 'Питомниковый кашель', 'Лабораторное исследование выделений из носа', 'Антибиотики, симптоматические препараты', '700', 5, 5),
(6, 'Стоматологическое заболевание', 'Рентген челюстей', 'Хирургическое вмешательство, антибиотики', '1200', 6, 6),
(7, 'Пневмония', 'Анализ', 'Антибиотики, симптоматические лекарства', '700', 7, 7),
(8, 'Сахарный диабет', 'Анализ крови, узи, рентген', 'Диетотерапия', '1200', 8, 8),
(9, 'Перелом', 'Рентген', 'Гипсовая повязка', '800', 9, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `vets`
--

CREATE TABLE `vets` (
  `id_vet` int NOT NULL,
  `familyV` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nameV` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fatherV` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `experience` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `vets`
--

INSERT INTO `vets` (`id_vet`, `familyV`, `nameV`, `fatherV`, `age`, `experience`, `telephone`) VALUES
(1, 'Артемов', 'Андрей', 'Николаевич', '45', '6', '89256321452'),
(2, 'Троицкая', 'Татьяна', 'Антоновна', '36', '10', '89526314258'),
(3, 'Трофимова', 'Ольга', 'Олеговна', '40', '12', '89457896321'),
(4, 'Шорин', 'Никита', 'Максимович', '47', '15', '89521456321'),
(5, 'Кашкан', 'Андрей', 'Семенович', '32', '4', '89452145236'),
(6, 'Жиленко', 'Артем', 'Максимович', '43', '15', '89526325412'),
(7, 'Зимина', 'Ангелина', 'Сергеевна', '27', '5', '89524125632'),
(8, 'Гацура', 'Александр', 'Вячеславович', '46', '20', '89526325412'),
(9, 'Морозов', 'Аркадий', 'Борисович', '41', '12', '89526314521');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id_an`),
  ADD KEY `id_owner` (`id_ow`);

--
-- Индексы таблицы `make_an_appointment`
--
ALTER TABLE `make_an_appointment`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_ow` (`id_ow`),
  ADD KEY `id_an` (`id_an`),
  ADD KEY `id_ser` (`id_ser`);

--
-- Индексы таблицы `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id_m`);

--
-- Индексы таблицы `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id_ow`);

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_dol`),
  ADD KEY `id_vet` (`id_vet`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_ser`),
  ADD KEY `id_m` (`id_m`),
  ADD KEY `id_vet` (`id_vet`);

--
-- Индексы таблицы `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`id_vet`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `id_an` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `make_an_appointment`
--
ALTER TABLE `make_an_appointment`
  MODIFY `id_m` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id_m` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `owners`
--
ALTER TABLE `owners`
  MODIFY `id_ow` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `id_dol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id_ser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `vets`
--
ALTER TABLE `vets`
  MODIFY `id_vet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`id_ow`) REFERENCES `owners` (`id_ow`);

--
-- Ограничения внешнего ключа таблицы `make_an_appointment`
--
ALTER TABLE `make_an_appointment`
  ADD CONSTRAINT `make_an_appointment_ibfk_1` FOREIGN KEY (`id_an`) REFERENCES `animals` (`id_an`),
  ADD CONSTRAINT `make_an_appointment_ibfk_2` FOREIGN KEY (`id_ow`) REFERENCES `owners` (`id_ow`),
  ADD CONSTRAINT `make_an_appointment_ibfk_3` FOREIGN KEY (`id_ser`) REFERENCES `services` (`id_ser`);

--
-- Ограничения внешнего ключа таблицы `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `position_ibfk_1` FOREIGN KEY (`id_vet`) REFERENCES `vets` (`id_vet`);

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_m`) REFERENCES `medicines` (`id_m`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`id_vet`) REFERENCES `vets` (`id_vet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
