-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.34 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица mega.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(16) NOT NULL,
  `text` text NOT NULL,
  `note_id` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'ru',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы mega.comments: 9 rows
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `author`, `text`, `note_id`, `section`, `date`, `time`, `lang`) VALUES
	(1, 'Дмитрий', 'вмфвьбидэиьэфлдьи', 'kak_viglyadyat_zhestokie_boi_v_dikoy_prirode', 'news', '2015-12-24', '11:11:00', 'ru'),
	(2, 'кава', 'sfgjngvbzdgbrfg', 'kak_viglyadyat_zhestokie_boi_v_dikoy_prirode', 'news', '2015-12-16', '14:32:00', 'ru'),
	(3, 'Петя', 'аяояпьтяапитявпар', 'nacionalniy_park_Redwood', 'video', '2015-12-24', '11:11:00', 'ru'),
	(4, 'коля', '\\аирпярочвапт', 'nacionalniy_park_Redwood', 'video', '2015-12-25', '14:32:00', 'ru'),
	(5, 'ваня', '\\виисчм', 'dikaya_priroda', 'video', '2015-12-24', '19:11:00', 'ru'),
	(6, 'леша', 'sfbgcbsfbhsnxvn', 'chto_nashli_na_dne_tainstvennoy_voronki_na_Yamayke', 'news', '2015-12-24', '11:11:00', 'ru'),
	(38, 'саня', ' Туфта какаято', 'chto_nashli_na_dne_tainstvennoy_voronki_na_Yamayke', 'news', '2016-04-15', '22:37:24', 'ru'),
	(36, 'dmitry', 'fsbnbsgv ', 'Maine_Working_to_Protect_the_Pine_Tree_State', 'news', '2016-01-14', '00:48:18', 'en'),
	(20, 'коля', 'воля ', 'dikaya_priroda', 'video', '2016-01-06', '21:18:29', 'ru');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Дамп структуры для таблица mega.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  `description` varchar(160) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `lang` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы mega.news: 4 rows
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `title_url`, `text`, `img`, `keywords`, `description`, `date`, `time`, `views`, `lang`) VALUES
	(1, 'Что нашли на дне таинственной воронки на Ямале', 'chto_nashli_na_dne_tainstvennoy_voronki_na_Yamayke', 'Когда в прошлом году на Ямале только обнаружили гигантскую «черную дыру», ученым пришлось сильно попотеть, чтобы установить причины ее появления. Земля буквально обваливалась под ногами, так что исследователи смогли спуститься на дно 35-метровой воронки лишь с третьего раза. Посмотрим, как проходил спуск, и что им удалось найти.\r\nИтак, перед вами гигантский провал, который образовался на Ямале в июле прошлого года.\r\nС помощью георадара удалось просветить дно воронки. Исследователи выяснили, что провал глубиной 35 метров имеет форму гигантского гриба, сужающегося к низу и расширяющегося ближе к поверхности.\r\n\r\n«Впервые мы опустились на дно воронки. Ощущения не передать словами», – прокомментировал один из исследователей, Владимир Пушкарев.', 'news1.png', 'таинственный, воронка, чудо,\r\nнеизведанное', 'таинственная воронка найдена на Ямайке', '2011-11-11', '19:27:12', 14, 'ru'),
	(2, 'Как выглядят жестокие бои в дикой природе', 'kak_viglyadyat_jestokie_boi_v_dikoy_prirode', '<p>\r\n	<span style="font-size:16px;"><span style="font-family:tahoma,geneva,sans-serif;">В дикой природе существуют свои правила выживания, и одно из них гласит: &ldquo;Убей или будь убитым&rdquo;. В борьбе за еду, партнера, потомство животные устраивают поистине жестокие бои, фотографии которых мы и хотим представить Вам сегодня.</span></span></p>\r\n', 'news2.jpg', 'Дикая природа, бои животных, жестокие бои', 'невероятные бои животных в дикой природе', '2016-04-11', '19:27:12', 48, 'ru'),
	(3, 'Snowmelt in the high country provides water for forests, wildlife, rivers and streams. Learn about t', 'Snowmelt _in_the_high_country_provides_water_for_forests_wildlife_rivers_and_streams', 'Arizona’s ponderosa pine forests are overgrown and prone to catastrophic fires that put our communities and water supplies at risk. The Nature Conservancy is working with communities, businesses, agencies and people like you to restore forest health and improve an important service of a healthy forest: clean, abundant water. ', 'news3.jpg', 'Snowmelt in the high country provides', 'Arizona’s ponderosa pine forests are overgrown and prone to catastrophic fires that put our communities and water supplies at risk.', '2011-11-11', '19:27:12', 1, 'en'),
	(4, 'Maine Working to Protect the Pine Tree State', 'Maine_Working_to_Protect_the_Pine_Tree_State', 'A Better Way, A Better Place\r\nProtect. Transform. Inspire.\r\nProtect: With your help, we can accomplish our core mission of protecting species and habitats.\r\nTransform: We\'re working at multiple levels, with business and policy interests.\r\nInspire: Your support inspires a legacy for future generations to enjoy.', 'news4.jpg', 'A Better Way, A Better Place\r\nProtect. ', 'Maine_Working_to_Protect', '2011-11-11', '19:27:12', 2, 'en');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Дамп структуры для таблица mega.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  `description` varchar(160) NOT NULL,
  `lang` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы mega.pages: 14 rows
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `title_url`, `keywords`, `description`, `lang`) VALUES
	(1, 'Главная', 'index', 'Ключевые слова для главной', 'мета описание', 'ru'),
	(2, 'Новости', 'news', 'Ключевые слова для новостей', 'мета описание', 'ru'),
	(3, 'Видео ', 'video', 'Ключевые слова для видео', 'мета описание', 'ru'),
	(4, 'Галерея', 'photos', 'Ключевые слова для галереи', 'мета описание', 'ru'),
	(5, 'Обратная связь', 'contacts', 'Ключевые слова для контактов', 'мета описание', 'ru'),
	(6, 'Main pages', 'index', 'keywords for main pages', 'description', 'en'),
	(7, 'News', 'news', 'keywords for news page', 'description', 'en'),
	(8, 'Videos', 'video', 'keywords for video page', 'description', 'en'),
	(9, 'Gallary', 'photos', 'keywords for Gallary', 'description', 'en'),
	(10, 'Contacts', 'contacts', 'keywords for contacts', 'description', 'en'),
	(11, 'Регистрация', 'signup', 'Ключевые слова для регистрации', 'описинаие', 'ru'),
	(12, 'Signup', 'signup', 'keywords for registration', 'description for reg', 'en'),
	(13, 'Восстановление пароля', 'forgot', 'Ключевые слова для страницы восстановления', 'описание для восстановления', 'ru'),
	(14, 'Forgot', 'forgot', 'keywords for forgot page', 'description for forhot', 'en');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Дамп структуры для таблица mega.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `lang` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы mega.photos: 13 rows
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` (`id`, `title`, `img`, `date`, `time`, `lang`) VALUES
	(1, 'название 1', 's1_377248_50.jpg', '2015-12-24', '11:11:00', 'ru'),
	(2, 'название 2', 's1_377248_65.jpg', '2015-12-25', '14:12:00', 'ru'),
	(3, 'название 3', 's1_377248_89.jpg', '2015-12-24', '12:33:00', 'ru'),
	(4, 'название 4', 's1_66773_15.jpg', '2015-12-16', '14:12:00', 'ru'),
	(5, 'название 5', 's1_66773_3.jpg', '2015-12-12', '19:11:00', 'ru'),
	(6, 'название 6', 's1_66773_7.jpg', '2015-12-18', '13:17:00', 'ru'),
	(7, 'название 7', 's1_377248_17.jpg', '2015-12-12', '19:11:00', 'en'),
	(8, 'название 8', 's1_377248_64.jpg', '2015-12-18', '12:45:00', 'en'),
	(9, 'название 9', 's1_377248_74.jpg', '2015-12-24', '19:11:00', 'en'),
	(10, 'название 10', 's1_66773_13.jpg', '2015-12-18', '12:45:00', 'en'),
	(11, 'название 11', 's1_66773_16.jpg', '2015-12-24', '11:11:00', 'en'),
	(12, 'название 12', 's1_66773_4.jpg', '2015-12-18', '14:32:00', 'en'),
	(25, 'почему вы именно', '160301135012скачанные файлы.jpg', '2016-03-01', '13:50:03', 'ru');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Дамп структуры для таблица mega.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы mega.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
	(6, 'fil12', 'fil12@mail.ru', '233ce7a53d132eb6fc5ab698a90f3262f1b1cfd2', 1),
	(7, 'admin', 'filimonov12@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 3),
	(5, '', '', '67a74306b06d0c01624fe0d0249a570f4d093747', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица mega.video
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `title_url` varchar(100) NOT NULL,
  `code` text NOT NULL,
  `keywords` text NOT NULL,
  `description` varchar(160) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `views` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы mega.video: 5 rows
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`id`, `title`, `title_url`, `code`, `keywords`, `description`, `date`, `time`, `views`, `lang`) VALUES
	(1, 'Дикая природа, хищники и жертвы, лучшие атаки хищников', 'dikaya_priroda', '<iframe width="560" height="315" src="https://www.youtube.com/embed/IXnHcuaMc8E" frameborder="0" allowfullscreen></iframe>', 'ключевые слова для видео 1', 'мета описание', '2015-12-24', '12:33:00', 3, 'ru'),
	(2, 'Национальный парк «Редвуд»', 'nacionalniy_park_Redwood', '<iframe width="560" height="315" src="https://www.youtube.com/embed/mNlSxHjoDLA" frameborder="0" allowfullscreen></iframe>', 'ключевые слова для видео 2', 'мета описание', '2015-12-07', '12:45:00', 3, 'ru'),
	(3, 'Nature by Numbers', 'Nature_by_Numbers', '<iframe width="560" height="315" src="https://www.youtube.com/embed/kkGeOWYOFoA" frameborder="0" allowfullscreen></iframe>', 'keywords for video 3', 'meta description', '2015-12-12', '19:11:00', 0, 'en'),
	(4, 'Nature', 'Nature', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Vdwh6eqiCzk" frameborder="0" allowfullscreen></iframe>', 'keywords for video 4', 'meta description', '2015-12-13', '13:17:00', 1, 'en'),
	(11, 'Самые красивые места на Земле!', '', '<iframe width="560" height="315" src="https://www.youtube.com/embed/6SDsdhhjR64" frameborder="0" allowfullscreen></iframe>', 'Самые красивые места ', 'Самые красивые', '2011-11-12', '19:27:12', 0, 'en');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
