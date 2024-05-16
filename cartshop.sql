-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2024 г., 14:55
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cartshop`
--

CREATE TABLE `cartshop` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cartshop`
--

INSERT INTO `cartshop` (`id`, `product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 1, 'SOVRN', '6300.00', 'Дека скейтборд SOVRN Victoria Deck', 'https://www.traektoria.ru/upload/resize_cache/iblock/b6f/200_200_1/19dfg34ikk18glb2ahyjui6wpy9a15zo.jpg'),
(2, 2, 'Абсурд', '2300.00', 'Дека скейтборд Абсурд Скейтер На Скейте', 'https://www.traektoria.ru/upload/resize_cache/iblock/0e1/200_200_1/t5i8c3q0i6zzydocw7srvnmzkvzfyi9i.jpg'),
(3, 3, 'Футболка', '7400.00', 'STUSSY Doberman TEE', 'https://www.traektoria.ru/upload/resized/2/11359331/11359331-387x387.jpg'),
(4, 4, 'Футболка', '3900.00', 'TRASHER Flame Logo', 'https://www.traektoria.ru/upload/resized/2/10493828/10493828-387x498.jpg'),
(5, 5, 'Низкие кеды', '9900.00', 'VANS KNU Skool', 'https://www.traektoria.ru/upload/resized/2/11363515/11363515-387x387.jpg'),
(6, 6, 'Низкие кеды', '6400.00', 'LAKAI Cambridge', 'https://www.traektoria.ru/upload/resized/2/11359840/11359840-387x387.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
