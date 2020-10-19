-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 19 2020 г., 10:23
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `icon`, `title`, `text`) VALUES
(1, '/myProject2/icons/map.png', 'НЕОБЫЧНЫЕ МАРШРУТЫ', 'Мы обязательно порадуем тебя необычными маршрутами, которые прокладывают наши опытные гиды.Ты увидишь и узнаешь о Москве то, что никогда не знал.'),
(2, '/myProject2/icons/souvenir.png', 'КЛАССНЫЕ СУВЕНИРЫ ', 'Отличная новость!Теперь мы сами изготавливаем сувениры.'),
(3, '/myProject2/icons/compass.png', 'ИНТЕРЕСНЫЕ ЭКСКУРСИИ', 'Мы приглашаем Вас на самые разные экскурсии по Москве. Известные достопримечательности и тихие улочки. Отличные фото в инсту обеспечены!'),
(4, '/myProject2/icons/picture.png', 'ФОТОСЕССИИ В МОСКВЕ', 'Наши профессиональные фотографы обеспечат вам незабываемые эмоции и шикарные фото в самых интересных уголках Москвы!'),
(5, '/myProject2/icons/discussion.png', 'НОВЫЕ ЗНАКОМСТВА', 'На наших экскурсиях и фотосессиях вы непременно найдете друзей, с которыми будет интересно обмениваться новыми эмоциями и впечатлениями1'),
(6, '/myProject2/icons/sun.png', 'ЯРКИЕ ВПЕЧАТЛЕНИЯ', 'Новые эмоции еще долго будут украшать ваши будни, у нас всегда найдется что-то новое и интересное1');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `photo`) VALUES
(1, '/myProject2/photos/1.jpg'),
(2, '/myProject2/photos/2.jpg'),
(3, '/myProject2/photos/3.jpg'),
(4, '/myProject2/photos/4.jpg'),
(5, '/myProject2/photos/5.jpg'),
(6, '/myProject2/photos/6.jpg'),
(7, '/myProject2/photos/7.jpg'),
(8, '/myProject2/photos/8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `slides`
--

INSERT INTO `slides` (`id`, `photo`, `title`, `text`) VALUES
(1, '/myProject2/photos/top.jpg', 'НЕОБЫЧНАЯ МОСКВА ', 'MyMosow - агенство интересных маршрутов'),
(2, '/myProject2/photos/top1.jpg', 'MyMoscow', 'агентство интересных маршрутов\r\n-туры-'),
(3, '/myProject2/photos/top2.jpg', 'MyMoscow', 'агентство интересных маршрутов\r\n-контакты-');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`, `phone`, `text`) VALUES
(1, 'fghjkl;', 'sdfghj@erty', '34567890-', 'ОТПРАВИТЬ ВОПРОС'),
(2, '', '', '', ';lkjhgfdsxcvbnm,.'),
(3, 'qwertyui', 'sdfgh@tfyui', 'wertyuiop', '');

-- --------------------------------------------------------

--
-- Структура таблицы `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `trips`
--

INSERT INTO `trips` (`id`, `photo`, `title`, `text`, `price`) VALUES
(1, '/myProject2/photos/moscow-city.jpg', 'Экскурсия-квест в комплексе Москва-сити', '\r\nСначала вам предложат погулять по “острову из стекла и бетона”, полюбоваться на стеклянные здания снизу, узнать историю комплекса и особенности каждой из башен. Затем на лифте, который движется со скоростью 7м/с, вы попадёте на смотровую площадку на высоту 230 метров. В Москве ей нет аналогов. С такой высоты как на ладони видны объекты Москва-Сити на самых разных этапах строительства. Воспользовавшись этой ситуацией экскурсовод расскажет о том, из чего состоит небоскреб, как обеспечивается его устойчивость, безопасность. Вопросы: как поднимается бетон, какой длины сваи, и как доставляется вода на высоту более 300 метров, также не останутся без ответа.Затем неожиданно поступит сообщение о том, что где-то в Москва-Сити заложено взрывное устройство. На поиски источника опасности будут направлены экскурсанты, которые уже прекрасно знают комплекс и должны справиться с этой нелегкой задачей. ', ''),
(2, '/myProject2/photos/skyscraper.jpg', 'Легенды Сталинских высоток', '\r\nСемь сталинских высоток — это визитная карточка Москвы, одни из самых красивых и уникальных зданий Европы. Но говорят, что целью авторов проекта во главе с самим Сталиным было не только продемонстрировать миру силу и могущество Советской державы, но и заложить в архитектуру столицы некую сакральную идею — пояс астероидов или восьмиконечную масонскую звезду. Центром её стал бы легендарный Дворец Советов, построенный на месте Старого Храма Христа. Фундаменты всех девяти высоток заложены в один день. Почти все они строились вдоль Садового кольца, как бы обрамляя исторический центр столицы. В 1950 г. Сталин отдал приказ — каждую из башен должен венчать шпиль со звездой. И эти шпили, как и сами звезды, тоже имели свой магический смысл. \r\n', ''),
(3, '/myProject2/photos/voland.jpg', 'По следам Мастера и Маргариты', '\r\n\"Однажды весною, в час небывало жаркого заката, в Москве, на Патриарших прудах... \". Так начинается один из самых значительных и известных романов XX века. Москва является в нём одним из действующих героев, ведь Воланд прибывает не только ради изучения \"недавно найденных рукописей чернокнижника в государственной библиотеке\", но и чтобы посмотреть, как изменился город. Мы увидим большинство мест, в которых происходят описанные в романе события: от \"Нехорошей квартиры\" (Большая Садовая, 302-бис, пятый этаж, кв. № 50), где жил сам М.А.Булгаков и куда он \"поселил\" Воланда со свитой через Патриаршие пруды и один из возможных особняков Маргариты мы пройдём к Моссолиту — литературному институту им. М.Горького и пройдёмся по переулку, где Мастер встретился с Маргаритой, а сам Михаил Афанасьевич со своей женой. Возможен вариант 4-5 часовой экскурсии, где мы также проследим за полётом Маргариты на метле, узнаем о том, как Н.В.Гоголь \"укрыл своей чугунной шинелью\" М.А.Булгакова и закончим маршрут у подвала Мастера.', ''),
(4, '/myProject2/photos/metro.jpg', 'Легенды московского метро', '\r\nПостроенная в 30-е годы система московского метрополитена была частью грандиозного замысла по переустройству столицы. Маршрут экскурсии пройдет по трассе первых линий метрополитена, в основном — по самой известной — Сокольнической. Ее открытие в 1935 году было воспринято как один из триумфов коммунизма. Строительство этой ветки стоило Москве невосполнимых потерь — ведь прошла она по старинным московским храмам.Начнётся экскурсия возле станции метро «Кропоткинская», которой предстояло стать подземным этажом грандиозного Дворца Советов, который планировалось создать на месте храма Христа Спасителя. Маршрут экскурсии включает осмотр ст. м. «Кропоткинская», «Библиотека им Ленина», «Лубянка» с выходом на площадь, «Арбатская», «Охотный ряд», «Новокузнецкая». Экскурсия завершается на ст.м. «Площадь революции», знаменитой своими бронзовыми скульптурами. О том, какую тайну они хранят и по сей день, вы узнаете из рассказа экскурсовода. ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `username`, `pass`) VALUES
(1, 'GTnmrf Gfjyjd', 'DGghh@ghj', 'WWERTY', '(*&KJH#$'),
(2, 'wertyuiop', 'lkjhgf@rtyui', 'wertyuiop', '45678fghjj'),
(3, 'DFGRT Tyu', 'WESDF@ghj', 'WERTYJ', '1f780420ee44ff7ef71eb3134693ab83'),
(4, 'Admin', 'Admin@ru', 'Admin', '2d9016d8a3015fddda8a07b286b5a98e'),
(5, 'qqqqqqq', 'qqqqqqq@qq', 'qqqqqqq', 'c7d8d7caa468e95fbb70ced17c7f04a2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
