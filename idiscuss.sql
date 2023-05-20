-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `master` varchar(10) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `username`, `password`, `master`) VALUES
(16, 'Administrator', 'masteradmin', '9f706ab85924bd1aa5f9b3c79f7490bd', 'true'),
(17, 'Ruturaj', 'rutu2002', '4ba29b9f9e5732ed33761840f4ba6c53', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(256) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a general-purpose high-level programming language and is widely used among the developers’ community. Python was mainly developed for emphasis on code readability, and its syntax allows programmers to express concepts in fewer lines of code.', '2023-04-06 19:55:36'),
(2, 'JavaScript', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating third', '2023-04-06 19:57:57'),
(3, 'Django', 'Django is a high-level Python web framework that helps developers build web applications easily and quickly. It follows the model-view-controller (MVC) architectural pattern and encourages a clean and pragmatic design. Django provides a powerful ORM (Objec', '2023-04-12 00:04:05'),
(4, 'Flask', 'Flask is a another framework of Python.', '2023-04-12 00:04:53'),
(5, 'Ravenshaw Radio', 'Ravenshaw Radio is a campus-based community radio station located in Ravenshaw University, Cuttack, Odisha, India. The station was established in 2007 and operates on 90.4 MHz FM frequency. It is run by the Department of Journalism and Mass Communication at Ravenshaw University, with the help of students and faculty members.', '2023-04-20 13:11:50'),
(6, 'Ravenshaw Cafeteria', 'Ravenshaw cafeteria provides good food options in a decent price.Our college cafeteria is a busy centre of student activities. The cafeteria has its own parking space available. It has both open and close section. Dahi Bara is must try option here. Overall a good experience with the restaurant. Not only some Dahi Bara but also many items are there .', '2023-04-20 13:13:59'),
(7, 'Ravenshaw University', 'The motto of Ravenshaw University is \"ତମସା ଗୁଞ୍ଜାଇବ ମୋ ଆଲୋକିତ ସିଂହାସନେ\", which is in Odia language and can be translated to \"In the illuminated throne, I will be resplendent like gold\".', '2023-04-20 12:43:48'),
(8, 'Department of IST', 'The Department of Information Science and Technology (IST) at Ravenshaw University is located in Cuttack, Odisha, India. It was established in 2006 and is recognized by the University Grants Commission (UGC).', '2023-04-20 13:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(35, 'Python is a popular and versatile programming language with simple syntax, a large and supportive community, and a vast range of libraries and frameworks that make development faster and easier.\r\n', 1, 13, '2023-04-23 09:13:49'),
(37, 'One of the key features of Python is its readability and simplicity. Its syntax is designed to be easily understood by both humans and machines, which makes it an excellent language for beginners to learn. Python also has a large and active community, which means that there are many resources available for learning and troubleshooting.', 57, 13, '2023-04-23 09:19:56'),
(38, 'Some popular libraries and frameworks that are built on top of Python include NumPy, Pandas, Django, Flask, TensorFlow, and PyTorch. These tools make it easy to perform complex tasks, such as data analysis and machine learning, with just a few lines of code.', 57, 13, '2023-04-23 09:20:45'),
(39, '2020: Python 3.9 is released. This version includes several new features, including support for dictionary merging using the \"update\" operator, and improvements to the \"zoneinfo\" module for working with time zones.', 57, 13, '2023-04-23 09:31:37'),
(40, '2018: Python 3.7 is released. This version includes several new features, including data classes for creating classes that are primarily used to store data, and improvements to the \"asyncio\" module.\r\n\r\n2019: Python 3.8 is released. This version includes several new features, including the \"walrus\" operator for assigning values to variables within an expression, and improvements to the \"typing\" module for type annotations.', 57, 13, '2023-04-23 09:31:52'),
(41, '2015: Python 3.5 is released. This version includes several new features, including the \"async\" and \"await\" keywords for writing asynchronous code.\r\n\r\n2017: Python 3.6 is released. This version includes several new features, including f-strings for string formatting, and the \"asyncio\" module for asynchronous programming.', 57, 13, '2023-04-23 09:32:07'),
(42, 'JavaScript has a wide range of libraries and frameworks that make web development faster and more efficient. Some of the most popular JavaScript frameworks include React, Angular, and Vue.js. Additionally, JavaScript has evolved significantly over the years and has become a powerful language for both front-end and back-end web development.', 60, 13, '2023-04-23 09:35:55'),
(43, 'Object-oriented programming: JavaScript is a fully object-oriented programming language, meaning that it treats all values as objects and has a powerful set of built-in methods and functions.\r\n\r\nEvent-driven programming: JavaScript is event-driven, meaning that it responds to events such as mouse clicks, key presses, and page loads by executing specific code.\r\n\r\nCross-platform compatibility: JavaScript can run on any platform that supports a web browser, including desktop and mobile devices.\r\n\r\nAsynchronous programming: JavaScript supports asynchronous programming, which allows code to continue running while waiting for a response from a server or other source.\r\n\r\nFunctional programming: JavaScript also supports functional programming, which involves passing functions as arguments to other functions and returning functions as values.', 60, 13, '2023-04-23 09:37:39'),
(44, 'Object-oriented programming: JavaScript is a fully object-oriented programming language, meaning that it treats all values as objects and has a powerful set of built-in methods and functions.\r\n\r\nEvent-driven programming: JavaScript is event-driven, meaning that it responds to events such as mouse clicks, key presses, and page loads by executing specific code.\r\n\r\nCross-platform compatibility: JavaScript can run on any platform that supports a web browser, including desktop and mobile devices.\r\n\r\nAsynchronous programming: JavaScript supports asynchronous programming, which allows code to continue running while waiting for a response from a server or other source.\r\n\r\nFunctional programming: JavaScript also supports functional programming, which involves passing functions as arguments to other functions and returning functions as values.', 60, 13, '2023-04-23 09:37:47'),
(45, 'weaf uerey teiryiu2 yiuwyoyhwew', 61, 13, '2023-04-23 12:26:49'),
(46, 'y6f76c4r7i rft888y', 56, 13, '2023-04-24 11:04:25'),
(47, 'nnbn', 60, 14, '2023-04-26 01:20:46'),
(48, 'vbbv4by34oi734yi74w7tyviyt', 62, 13, '2023-04-26 10:50:41'),
(49, 'Some of the popular implementations of Python include CPython, Jython, IronPython, PyPy, and Stackless Python. Each implementation has its own strengths and weaknesses, and developers can choose the implementation that best suits their needs.\r\n\r\nCPython is the most widely used implementation of Python and is the default implementation that most developers use. It is written in C and is the reference implementation for Python. Jython is an implementation of Python that runs on the Java Virtual Machine, while IronPython is an implementation that runs on the .NET framework.\r\n\r\nPyPy is an implementation of Python that is designed to be faster than CPython by using a just-in-time (JIT) compiler. Stackless Python is an implementation that allows for microthreads, which can be used to implement lightweight concurrency.\r\n\r\nOverall, the different implementations of Python offer developers flexibility in terms of performance, platform compatibility, and functionality, and allow them to choose the implementation that best fits their specific requirements.', 60, 13, '2023-04-27 20:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(256) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Know about python.', 'Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety of different programs and isn\'t specialized for any specific problems.', 1, 16, '2023-04-23 00:29:50'),
(56, 'Why python is better?', 'Python is a popular and versatile programming language with simple syntax, a large and supportive community, and a vast range of libraries and frameworks that make development faster and easier.', 1, 13, '2023-04-23 09:13:01'),
(57, 'Tell about python?', 'Python is a high-level, interpreted programming language that was first released in 1991. It was created by Guido van Rossum and is currently maintained by the Python Software Foundation. Python is a versatile language that can be used for a wide range of applications, including web development, scientific computing, data analysis, artificial intelligence, and more.', 1, 13, '2023-04-23 09:19:37'),
(58, 'History of python?', 'Python is a high-level, general-purpose programming language that was first released in 1991 by Guido van Rossum. Guido van Rossum was a computer programmer from the Netherlands who started working on Python in the late 1980s as a successor to the ABC language.', 1, 13, '2023-04-23 09:31:02'),
(60, 'Letus Know about JavaScript.', 'JavaScript is a programming language used primarily for creating interactive web applications and dynamic websites. It was created by Brendan Eich in just 10 days in 1995 for Netscape Navigator, one of the earliest web browsers. JavaScript is now widely used on both the client-side and server-side of web development.', 2, 13, '2023-04-23 09:34:25'),
(61, 'flkr rgliglwegu', 'gerge uerig r kutgeriu utyeig gi ti tyt yiu rty tyo', 1, 13, '2023-04-23 12:26:14'),
(62, 'tberyuct7tyi', '34oy7obt4834t734r7', 1, 13, '2023-04-26 10:50:30'),
(63, 'ygtuv7u', 'ugbf87bt76', 1, 13, '2023-04-26 10:52:56'),
(65, 'know about Numpy', 'what is the pythin', 1, 16, '2023-05-06 18:38:52'),
(66, 'know about Numpy', 'what is the pythin jghf', 1, 16, '2023-05-20 16:18:23'),
(70, 'Ad incididunt est q', 'Nostrum sapiente rep', 8, 13, '2023-05-20 16:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(13, 'Janmejaya', '$2y$10$8jU0y2McBura10dz58zbS.KQneyzp.Ma9MsyMaMuO92Dav4pxrdeq', '2023-04-21 09:26:47'),
(14, 'ganesh', '$2y$10$XWN07rY/Cr8EQbE2leNgiuCuSYXysA/VyKPPh6QfJhwkk2bNHZPcm', '2023-04-26 00:10:40'),
(15, 'sriram', '$2y$10$9lDnVnqAK2nAA.BjefbDt.xorCtObnq1xsLUO5jx5QSJjkZ2Y.yQK', '2023-04-26 00:16:45'),
(16, 'rutu1009', '$2y$10$M.LB3i3ZJ3LmLlX5UZOekuEBv0SMKf7Nj2KnrDmsMRHp902KQHuZa', '2023-05-06 18:37:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
