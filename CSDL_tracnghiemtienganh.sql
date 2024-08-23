-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 01:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tntienganh`
--

-- --------------------------------------------------------

--
-- Table structure for table `bailam`
--

CREATE TABLE `bailam` (
  `MaBaiLam` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `MaBaiThi` int(11) NOT NULL,
  `NgayLam` date NOT NULL,
  `diem` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bailam`
--

INSERT INTO `bailam` (`MaBaiLam`, `id_user`, `MaBaiThi`, `NgayLam`, `diem`) VALUES
(1, 1, 1, '2024-05-10', NULL),
(3, 6, 12, '2024-06-01', 1.11);

-- --------------------------------------------------------

--
-- Table structure for table `baithi`
--

CREATE TABLE `baithi` (
  `MaBaiThi` int(11) NOT NULL,
  `MoTa` varchar(255) DEFAULT NULL,
  `ThoiGianLamBai` int(11) NOT NULL,
  `TenBaiThi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baithi`
--

INSERT INTO `baithi` (`MaBaiThi`, `MoTa`, `ThoiGianLamBai`, `TenBaiThi`, `NgayTao`) VALUES
(1, 'Bài thi số 1', 1, 'Đề thi trắc nghiệm tiếng Anh trình độ A1', '2024-05-10'),
(2, 'Bài thi số 2', 45, 'Đề thi trắc nghiệm tiếng Anh trình độ A2', '2024-05-10'),
(3, 'Bài thi số 3', 30, 'Đề thi trắc nghiệm tiếng Anh trình độ B1', '2024-05-10'),
(4, 'Bài thi số 4', 75, 'Đề thi trắc nghiệm tiếng Anh trình độ B2', '2024-05-10'),
(5, 'Bài thi số 5', 90, 'Đề thi trắc nghiệm tiếng Anh trình độ C', '2024-05-10'),
(12, '1234567', 45, 'Đề thi trắc nghiệm tiếng An trình độ A1 của hahaha', '2024-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCauHoi` int(11) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `DapAnDung` varchar(255) NOT NULL,
  `DapAnSai1` varchar(255) NOT NULL,
  `DapAnSai2` varchar(255) NOT NULL,
  `DapAnSai3` varchar(255) NOT NULL,
  `TrinhDo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCauHoi`, `NoiDung`, `DapAnDung`, `DapAnSai1`, `DapAnSai2`, `DapAnSai3`, `TrinhDo`) VALUES
(1, 'He\'s very short:________sisters are taller.', 'His', 'His are', 'He', 'He is', 'A1'),
(2, 'When________dinner.', 'for', 'is', 'you', 'go', 'A1'),
(3, 'Kate is the best________the three.', 'of', 'in', 'among', 'between', 'A1'),
(4, 'Are you ready?-________.', 'Yes, I am', 'Yes, I do', 'Yes, you are', 'Yes, he is', 'A1'),
(5, 'Leave your dirty shoes________the door.', 'by', 'on', 'at', 'in', 'A1'),
(6, 'after / What / you / do / usually do / school ?', 'What do you usually do after school?', 'What you do after school usually do ?', 'What you usually do after do school?', 'What you do usually do after school?', 'A1'),
(7, 'in / city / busy / Life / is / the / always.', 'City is always busy in the life', 'Life always busy in is the city', 'Life is busy always in the city', 'Life is always busy in the city', 'A1'),
(8, 'on/of/birthday/September//is/second/her/the', 'Her birthday is on the second of September', 'September is her birthday on the second of', 'Her birthday on is the second of September', 'September of is her birthday on the second', 'A1'),
(9, 'often/before/go/I/home/don\'t/seven', 'I don’t often go home before seven', 'I don’t before often go home seven', 'I don’t before seven often go home', 'I don’t often before go home seven', 'A1'),
(10, 'Ireland/her/grandmother/in/born/was', 'Her grandmother was born in Ireland', 'Grandmother her was in Ireland born', 'Grandmother her born was in Ireland', 'Her grandmother was in Ireland born', 'A1'),
(11, 'Such characters as fairies or witches in Walt Disney animated cartoons are purely_________.', 'imaginary', 'imaginable', 'imaginative', 'imagining', 'A1'),
(12, 'Neither Mary nor her brothers _________at the party yet. They may be getting stuck in the traffic.', 'have arrived', 'are arriving', 'has arrived', 'is arriving', 'A1'),
(13, 'The old market is said _________in a fire two years ago.', 'to have been destroyed', 'to be destroyed', 'to have destroyed', 'to be destroying', 'A1'),
(14, 'We should participate in the movement _________to conserve the natural environment.', 'organized', 'which organized', 'organizing', 'to organize', 'A1'),
(15, 'I have decided to buy that house. I won’t change my mind _________what you say.', 'no matter', 'although', 'because', 'whether', 'A1'),
(16, 'He ………. to work by train', 'goes', 'go', 'went', 'gone', 'A1'),
(17, 'Yesterday afternoon, he …….. football, while his sister …….. the piano.', 'was playing/was playing', 'was playing/played', 'played/played', 'plays/plays', 'A1'),
(18, 'I ……… my work. I’m on my way home.', 'have just finished', 'just finish', 'am just finishing', 'just finished', 'A1'),
(19, 'She ……… . Her eyes are red.', 'has been crying', 'cries', 'is crying', 'has cried', 'A1'),
(20, 'I ………. my room all morning.', 'have been cleaning', 'have cleaned', 'am cleaning', 'will clean', 'A1'),
(21, 'Food prices have been ________ steadily for at least twenty years.', 'rising', 'raising', 'lifting', 'growing', 'A1'),
(22, 'I\'ll have to study very hard, ________ I can pass the exam.', 'in order', 'so that', 'therefore', 'such', 'A1'),
(23, 'You ________ to eat if you don\'t feel like it.', 'needn\'t', 'mustn\'t', 'don\'t have', 'haven\'t', 'A1'),
(24, 'We\'ll play tennis and ________ we\'ll have lunch.', 'then', 'straight away', 'immediately', 'so', 'A1'),
(25, 'He has to go to Canada for the next ________ of his training.', 'stage', 'stand', 'point', 'step', 'A1'),
(26, '________ is the capital of France?', 'Paris', 'London', 'Rome', 'Berlin', 'A1'),
(27, 'She ________ a doctor.', 'is', 'are', 'am', 'be', 'A1'),
(28, 'I ________ like coffee.', 'don’t', 'isn’t', 'aren’t', 'am not', 'A1'),
(29, '________ name is John.', 'My', 'Me', 'Mine', 'I', 'A1'),
(30, 'What ________ your name?', 'is', 'are', 'do', 'does', 'A1'),
(31, 'Where ________ you live?', 'do', 'are', 'is', 'does', 'A1'),
(32, 'She ________ to school every day.', 'goes', 'go', 'going', 'gone', 'A1'),
(33, '________ you like ice cream?', 'Do', 'Is', 'Are', 'Does', 'A1'),
(34, 'We ________ happy.', 'are', 'is', 'am', 'be', 'A1'),
(35, 'I ________ a student.', 'am', 'is', 'are', 'be', 'A1'),
(36, 'They ________ from Canada.', 'are', 'is', 'am', 'be', 'A1'),
(37, 'He ________ my friend.', 'is', 'are', 'am', 'be', 'A1'),
(38, 'We ________ playing football.', 'are', 'is', 'am', 'be', 'A1'),
(39, '________ you coming?', 'Are', 'Is', 'Am', 'Be', 'A1'),
(40, 'I ________ my homework.', 'did', 'do', 'doing', 'done', 'A1'),
(41, 'She ________ a book.', 'reads', 'read', 'reading', 'readed', 'A1'),
(42, 'We ________ to the park.', 'went', 'go', 'going', 'gone', 'A1'),
(43, 'He ________ to music.', 'listens', 'listen', 'listening', 'listened', 'A1'),
(44, 'They ________ dinner.', 'eat', 'eats', 'eating', 'ate', 'A1'),
(45, 'I ________ TV.', 'watch', 'watches', 'watching', 'watched', 'A1'),
(46, 'She ________ her homework.', 'does', 'do', 'doing', 'did', 'A1'),
(47, 'We ________ a movie.', 'see', 'sees', 'seeing', 'saw', 'A1'),
(48, 'He ________ a letter.', 'writes', 'write', 'writing', 'wrote', 'A1'),
(49, 'They ________ to the store.', 'go', 'goes', 'going', 'went', 'A1'),
(50, 'I ________ a car.', 'have', 'has', 'having', 'had', 'A1'),
(51, 'She ________ a dog.', 'has', 'have', 'having', 'had', 'A1'),
(52, 'We ________ a cat.', 'have', 'has', 'having', 'had', 'A1'),
(53, 'He ________ a bike.', 'has', 'have', 'having', 'had', 'A1'),
(54, 'They ________ a house.', 'have', 'has', 'having', 'had', 'A1'),
(55, 'I ________ happy.', 'am', 'is', 'are', 'be', 'A1'),
(56, 'She ________ sad.', 'is', 'are', 'am', 'be', 'A1'),
(57, 'We ________ excited.', 'are', 'is', 'am', 'be', 'A1'),
(58, 'He ________ tired.', 'is', 'are', 'am', 'be', 'A1'),
(59, 'They ________ angry.', 'are', 'is', 'am', 'be', 'A1'),
(60, 'I ________ hungry.', 'am', 'is', 'are', 'be', 'A1'),
(61, 'She ________ thirsty.', 'is', 'are', 'am', 'be', 'A1'),
(62, 'We ________ sleepy.', 'are', 'is', 'am', 'be', 'A1'),
(63, 'He ________ cold.', 'is', 'are', 'am', 'be', 'A1'),
(64, 'They ________ hot.', 'are', 'is', 'am', 'be', 'A1'),
(65, 'I ________ a book.', 'have', 'has', 'having', 'had', 'A1'),
(66, 'She ________ a pen.', 'has', 'have', 'having', 'had', 'A1'),
(67, 'We ________ a pencil.', 'have', 'has', 'having', 'had', 'A1'),
(68, 'He ________ a notebook.', 'has', 'have', 'having', 'had', 'A1'),
(69, 'They ________ a computer.', 'have', 'has', 'having', 'had', 'A1'),
(70, 'I ________ an apple.', 'have', 'has', 'having', 'had', 'A1'),
(71, 'She ________ a banana.', 'has', 'have', 'having', 'had', 'A1'),
(72, 'We ________ an orange.', 'have', 'has', 'having', 'had', 'A1'),
(73, 'He ________ a mango.', 'has', 'have', 'having', 'had', 'A1'),
(74, 'They ________ a grape.', 'have', 'has', 'having', 'had', 'A1'),
(75, 'She ________ in New York last year.', 'lived', 'live', 'living', 'lives', 'A2'),
(76, '________ you ever been to London?', 'Have', 'Do', 'Are', 'Is', 'A2'),
(77, 'They ________ playing football now.', 'are', 'is', 'be', 'were', 'A2'),
(78, 'I have ________ finished my homework.', 'already', 'yet', 'still', 'just', 'A2'),
(79, 'He ________ to the store to buy some milk.', 'went', 'goes', 'going', 'gone', 'A2'),
(80, 'We ________ to the park every Sunday.', 'go', 'goes', 'going', 'gone', 'A2'),
(81, 'She ________ a letter to her friend.', 'wrote', 'write', 'writing', 'writes', 'A2'),
(82, 'They ________ dinner at 7 PM.', 'eat', 'eats', 'eating', 'ate', 'A2'),
(83, 'I ________ TV every night.', 'watch', 'watches', 'watching', 'watched', 'A2'),
(84, 'He ________ his homework before going to bed.', 'does', 'do', 'doing', 'did', 'A2'),
(85, 'We ________ a movie last weekend.', 'saw', 'see', 'seeing', 'seen', 'A2'),
(86, 'She ________ a book at the library.', 'found', 'find', 'finding', 'finds', 'A2'),
(87, 'They ________ to the store by bus.', 'went', 'go', 'going', 'gone', 'A2'),
(88, 'I ________ a car accident yesterday.', 'had', 'have', 'having', 'has', 'A2'),
(89, 'She ________ a cat when she was young.', 'had', 'has', 'having', 'have', 'A2'),
(90, 'We ________ a picnic last Sunday.', 'had', 'have', 'having', 'has', 'A2'),
(91, 'He ________ a headache last night.', 'had', 'have', 'having', 'has', 'A2'),
(92, 'They ________ a party last weekend.', 'had', 'have', 'having', 'has', 'A2'),
(93, 'I ________ happy when I heard the news.', 'was', 'am', 'is', 'be', 'A2'),
(94, 'She ________ sad after watching the movie.', 'was', 'am', 'is', 'be', 'A2'),
(95, 'We ________ excited about the trip.', 'were', 'are', 'is', 'be', 'A2'),
(96, 'He ________ tired after working all day.', 'was', 'am', 'is', 'be', 'A2'),
(97, 'They ________ angry with each other.', 'were', 'are', 'is', 'be', 'A2'),
(98, 'I ________ hungry before dinner.', 'was', 'am', 'is', 'be', 'A2'),
(99, 'She ________ thirsty after exercising.', 'was', 'am', 'is', 'be', 'A2'),
(100, 'We ________ sleepy during the meeting.', 'were', 'are', 'is', 'be', 'A2'),
(101, 'He ________ cold in the winter.', 'was', 'am', 'is', 'be', 'A2'),
(102, 'They ________ hot in the summer.', 'were', 'are', 'is', 'be', 'A2'),
(103, 'I ________ a book about dinosaurs.', 'read', 'reads', 'reading', 'readed', 'A2'),
(104, 'She ________ a novel by Jane Austen.', 'read', 'reads', 'reading', 'readed', 'A2'),
(105, 'We ________ a magazine article about space.', 'read', 'reads', 'reading', 'readed', 'A2'),
(106, 'He ________ a newspaper every morning.', 'reads', 'read', 'reading', 'readed', 'A2'),
(107, 'They ________ a short story last night.', 'read', 'reads', 'reading', 'readed', 'A2'),
(108, 'I ________ a pen in my bag.', 'have', 'has', 'having', 'had', 'A2'),
(109, 'She ________ a pencil on her desk.', 'has', 'have', 'having', 'had', 'A2'),
(110, 'We ________ a notebook for each subject.', 'have', 'has', 'having', 'had', 'A2'),
(111, 'He ________ a computer at home.', 'has', 'have', 'having', 'had', 'A2'),
(112, 'They ________ a smartphone.', 'have', 'has', 'having', 'had', 'A2'),
(113, 'I ________ an apple for a snack.', 'ate', 'eat', 'eating', 'eaten', 'A2'),
(114, 'She ________ a banana for breakfast.', 'ate', 'eat', 'eating', 'eaten', 'A2'),
(115, 'We ________ an orange for dessert.', 'ate', 'eat', 'eating', 'eaten', 'A2'),
(116, 'He ________ a mango for lunch.', 'ate', 'eat', 'eating', 'eaten', 'A2'),
(117, 'They ________ grapes for a snack.', 'ate', 'eat', 'eating', 'eaten', 'A2'),
(118, 'Where ________ you last night?', 'were', 'are', 'was', 'is', 'B1'),
(119, 'What time ________ he usually go to bed?', 'does', 'do', 'is', 'are', 'B1'),
(120, '________ you watch TV every day?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(121, '________ he like pizza?', 'Does', 'Do', 'Is', 'Are', 'B1'),
(122, '________ they live in that house?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(123, '________ she play tennis?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(124, '________ it rain a lot in your city?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(125, '________ you speak English?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(126, 'How often ________ they go to the gym?', 'do', 'does', 'are', 'did', 'B1'),
(127, 'What ________ she usually eat for breakfast?', 'does', 'do', 'is', 'are', 'B1'),
(128, 'Where ________ they from?', 'are', 'is', 'do', 'does', 'B1'),
(129, 'How ________ you spell your last name?', 'do', 'does', 'did', 'are', 'B1'),
(130, 'Why ________ he always late?', 'is', 'are', 'do', 'does', 'B1'),
(131, '________ your sister speak Spanish?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(132, '________ they have a dog?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(133, 'How ________ we get to the airport?', 'do', 'does', 'are', 'did', 'B1'),
(134, '________ you like watching movies?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(135, 'What time ________ the bank close?', 'does', 'do', 'is', 'are', 'B1'),
(136, 'What ________ you do for a living?', 'do', 'does', 'did', 'are', 'B1'),
(137, 'How many brothers and sisters ________ you have?', 'do', 'does', 'are', 'did', 'B1'),
(138, 'Is this your first time ________ here?', 'being', 'be', 'are', 'is', 'B1'),
(139, 'She ________ to the beach every summer.', 'goes', 'go', 'going', 'went', 'B1'),
(140, 'What time ________ he usually get up?', 'does', 'do', 'is', 'are', 'B1'),
(141, 'How ________ he go to work?', 'does', 'do', 'is', 'are', 'B1'),
(142, 'How ________ he know about the party?', 'does', 'do', 'is', 'are', 'B1'),
(143, '________ you speak to him yesterday?', 'Did', 'Do', 'Does', 'Are', 'B1'),
(144, 'What ________ you want for dinner?', 'do', 'does', 'did', 'are', 'B1'),
(145, '________ she like ice cream?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(146, 'When ________ you last see him?', 'did', 'do', 'does', 'are', 'B1'),
(147, '________ you see the new movie?', 'Did', 'Do', 'Does', 'Are', 'B1'),
(148, 'How often ________ she go to the gym?', 'does', 'do', 'is', 'are', 'B1'),
(149, '________ he eat fish?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(150, 'Why ________ she always late?', 'is', 'are', 'do', 'does', 'B1'),
(151, 'What ________ you want for your birthday?', 'do', 'does', 'did', 'are', 'B1'),
(152, '________ they have a garden?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(153, 'How ________ she get to school?', 'does', 'do', 'is', 'are', 'B1'),
(154, '________ he drink coffee?', 'Does', 'Do', 'Did', 'Is', 'B1'),
(155, 'Where ________ she go for vacation?', 'did', 'do', 'does', 'are', 'B1'),
(156, 'How ________ she go to work?', 'does', 'do', 'is', 'are', 'B1'),
(157, '________ you play tennis?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(158, 'What time ________ she usually leave?', 'does', 'do', 'is', 'are', 'B1'),
(159, 'How ________ you know about it?', 'do', 'does', 'did', 'are', 'B1'),
(160, 'When ________ he usually come home?', 'does', 'do', 'is', 'are', 'B1'),
(161, '________ you go to bed early?', 'Do', 'Does', 'Did', 'Are', 'B1'),
(162, 'Why ________ he never call me?', 'does', 'is', 'do', 'did', 'B1'),
(163, 'What ________ you do last weekend?', 'did', 'do', 'does', 'are', 'B1'),
(164, 'She ________ to Paris three times.', 'has been', 'have been', 'had been', 'having been', 'B2'),
(165, 'Where ________ you last night?', 'were', 'are', 'was', 'is', 'B2'),
(166, 'The teacher ________ us an exam yesterday.', 'gave', 'give', 'gives', 'given', 'B2'),
(167, 'My brother ________ for the company for five years.', 'has worked', 'have worked', 'worked', 'working', 'B2'),
(168, '________ you ever been to China?', 'Have', 'Has', 'Did', 'Do', 'B2'),
(169, 'The movie was boring. I ________ it.', 'didn’t enjoy', 'don’t enjoy', 'doesn’t enjoy', 'not enjoy', 'B2'),
(170, 'We ________ to the cinema when we lived in London.', 'used to go', 'use to go', 'uses to go', 'using to go', 'B2'),
(171, 'She ________ her keys in the car yesterday.', 'left', 'leave', 'leaves', 'leaving', 'B2'),
(172, 'I ________ my computer when the power went out.', 'was using', 'used', 'am using', 'use', 'B2'),
(173, 'What ________ you do if you won the lottery?', 'would', 'will', 'do', 'did', 'B2'),
(174, 'He ________ to the doctor’s twice this week.', 'has been', 'have been', 'was', 'is', 'B2'),
(175, 'He ________ about the accident since it happened.', 'hasn’t forgotten', 'didn’t forget', 'doesn’t forget', 'not forget', 'B2'),
(176, 'When ________ you first meet your best friend?', 'did', 'do', 'does', 'are', 'B2'),
(177, 'They ________ in New York for five years before they moved.', 'had lived', 'have lived', 'lived', 'living', 'B2'),
(178, 'I ________ basketball with friends every Sunday.', 'play', 'am playing', 'played', 'was playing', 'B2'),
(179, 'She ________ for that company for six months.', 'has worked', 'have worked', 'worked', 'working', 'B2'),
(180, 'He ________ to college in 2010.', 'went', 'go', 'going', 'have gone', 'B2'),
(181, 'I ________ to bed when you called.', 'was going', 'go', 'going', 'have gone', 'B2'),
(182, 'She ________ dinner by the time I get home.', 'will have cooked', 'cooked', 'will cook', 'cooking', 'B2'),
(183, 'The train ________ at 9 a.m.', 'leaves', 'leave', 'leaving', 'left', 'B2'),
(184, 'I ________ in this city for ten years.', 'have lived', 'has lived', 'lived', 'living', 'B2'),
(185, 'He ________ for the job for two weeks when they offered it to him.', 'had been interviewing', 'has interviewed', 'have interviewed', 'interviewing', 'B2'),
(186, 'She ________ English for two years.', 'has been studying', 'had been studying', 'studied', 'studies', 'B2'),
(187, 'They ________ for three hours before they found the hotel.', 'had been driving', 'have been driving', 'were driving', 'drove', 'B2'),
(188, 'My sister ________ a headache for three days.', 'has had', 'had', 'have', 'having', 'B2'),
(189, 'They ________ a new car yet.', 'haven’t bought', 'didn’t buy', 'aren’t buying', 'not buy', 'B2'),
(190, 'She ________ her homework by the time her mother gets home.', 'will have finished', 'finished', 'will finish', 'finishing', 'B2'),
(191, 'I ________ a lot of progress with my English recently.', 'have made', 'has made', 'made', 'making', 'B2'),
(192, 'They ________ a dog for three years.', 'have had', 'has had', 'had', 'having', 'B2'),
(193, 'She ________ English before she moved to London.', 'had never studied', 'has never studied', 'never studied', 'studied never', 'B2'),
(194, 'She ________ tennis since she was ten.', 'has been playing', 'had been playing', 'played', 'plays', 'B2'),
(195, 'He ________ her since last year.', 'has known', 'have known', 'knew', 'knowing', 'B2'),
(196, 'They ________ in the sun all day.', 'have been sitting', 'has been sitting', 'had been sitting', 'are sitting', 'B2'),
(197, 'She ________ for that company for six months.', 'has worked', 'have worked', 'worked', 'working', 'B2'),
(198, 'He ________ football since he was a child.', 'has played', 'have played', 'played', 'playing', 'B2'),
(199, 'She ________ from her cold by the time her birthday came.', 'had recovered', 'has recovered', 'has been recovered', 'recovered', 'B2'),
(200, 'She ________ for the exam for a week.', 'had been studying', 'have been studying', 'was studying', 'studied', 'B2'),
(201, 'He ________ at home since last Monday.', 'has been staying', 'have been staying', 'stayed', 'staying', 'B2'),
(202, 'She ________ English for two years.', 'has been studying', 'had been studying', 'studied', 'studies', 'B2'),
(203, 'He ________ his homework for an hour when the lights went out.', 'had been doing', 'have been doing', 'did', 'do', 'B2'),
(204, 'She ________ dinner by the time I get home.', 'will have cooked', 'cooked', 'will cook', 'cooking', 'B2'),
(205, 'The plane ________ by the time we get to the airport.', 'will have taken off', 'took off', 'takes off', 'taking off', 'B2'),
(206, 'She ________ by the time I got to the hospital.', 'had left', 'have left', 'left', 'leaving', 'B2'),
(207, 'By the time I get there, they ________ the game.', 'will have finished', 'finished', 'will finish', 'finishing', 'B2'),
(208, 'She ________ dinner by the time I get home.', 'will have cooked', 'cooked', 'will cook', 'cooking', 'B2'),
(209, 'He ________ for two hours by the time we get there.', 'will have waited', 'waits', 'waited', 'waiting', 'B2'),
(210, 'They ________ for three hours before they found the hotel.', 'had been driving', 'have been driving', 'were driving', 'drove', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `chitietbailam`
--

CREATE TABLE `chitietbailam` (
  `MaCTBL` int(11) NOT NULL,
  `MaBaiLam` int(11) NOT NULL,
  `MaCauHoi` int(11) NOT NULL,
  `DapAnDaChon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietbailam`
--

INSERT INTO `chitietbailam` (`MaCTBL`, `MaBaiLam`, `MaCauHoi`, `DapAnDaChon`) VALUES
(1, 1, 1, '3'),
(2, 1, 2, '1'),
(3, 1, 3, '4'),
(4, 1, 4, '2'),
(5, 1, 5, '1'),
(6, 3, 1, 'His are'),
(7, 3, 2, 'for'),
(8, 3, 5, 'in'),
(9, 3, 8, 'Her birthday is on the second of September'),
(10, 3, 9, 'I don’t before often go home seven'),
(11, 3, 10, 'Grandmother her was in Ireland born'),
(12, 3, 11, 'imaginary'),
(13, 3, 21, 'rising'),
(14, 3, 22, 'in order');

-- --------------------------------------------------------

--
-- Table structure for table `chitietbaithi`
--

CREATE TABLE `chitietbaithi` (
  `MaCTBT` int(11) NOT NULL,
  `MaBaiThi` int(11) NOT NULL,
  `MaCauHoi` int(11) NOT NULL,
  `DapAnDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietbaithi`
--

INSERT INTO `chitietbaithi` (`MaCTBT`, `MaBaiThi`, `MaCauHoi`, `DapAnDung`) VALUES
(3, 1, 3, 'of'),
(4, 1, 4, 'Ye'),
(5, 1, 5, 'by'),
(6, 2, 6, 'Wh'),
(7, 2, 7, 'Ci'),
(8, 2, 8, 'He'),
(9, 2, 9, 'I '),
(10, 2, 10, 'He'),
(11, 3, 11, 'im'),
(12, 3, 12, 'ha'),
(13, 3, 13, 'to'),
(14, 3, 14, 'or'),
(15, 3, 15, 'no'),
(16, 4, 16, 'go'),
(17, 4, 17, 'wa'),
(18, 4, 18, 'ha'),
(19, 4, 19, 'ha'),
(20, 4, 20, 'ha'),
(21, 5, 21, 'ri'),
(22, 5, 22, 'in'),
(23, 5, 23, 'ne'),
(24, 5, 24, 'th'),
(25, 5, 25, 'st'),
(26, 12, 2, 'for'),
(27, 12, 5, 'by'),
(28, 12, 63, 'is'),
(29, 12, 9, 'I don’t often go home before seven'),
(30, 12, 16, 'goes'),
(31, 12, 1, 'His'),
(32, 12, 23, 'needn\'t'),
(33, 12, 28, 'don’t'),
(34, 12, 11, 'imaginary'),
(35, 12, 51, 'has'),
(36, 12, 44, 'eat'),
(37, 12, 27, 'is'),
(38, 12, 24, 'then'),
(39, 12, 33, 'Do'),
(40, 12, 58, 'is'),
(41, 12, 72, 'have'),
(42, 12, 50, 'have'),
(43, 12, 15, 'no matter'),
(44, 12, 30, 'is'),
(45, 12, 10, 'Her grandmother was born in Ireland'),
(46, 12, 21, 'rising'),
(47, 12, 32, 'goes'),
(48, 12, 35, 'am'),
(49, 12, 60, 'am'),
(50, 12, 8, 'Her birthday is on the second of September'),
(51, 12, 46, 'does'),
(52, 12, 22, 'in order'),
(53, 12, 53, 'has'),
(54, 12, 31, 'do'),
(55, 12, 38, 'are'),
(56, 1, 14, 'A'),
(57, 1, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id_User` int(11) NOT NULL,
  `TenDangNhap` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`Id_User`, `TenDangNhap`, `NgaySinh`, `Email`, `MatKhau`) VALUES
(1, 'Nguyen Van A', '1990-03-15', 'nguyenvana@gmail.com', 'nguyenvana123'),
(2, 'Le Thi B', '1985-07-25', 'lethib@gmail.com', 'lethib123'),
(3, 'Tran Van C', '1992-11-10', 'tranvanc@gmail.com', 'tranvanc123'),
(4, 'Pham Thi D', '1988-05-20', 'phamthid@gmail.com', 'phamthid123'),
(5, 'Hoang Van E', '1995-09-08', 'hoangvane@gmail.com', 'hoangvane123'),
(6, 'Quân Lê', '2024-06-01', 'quanlehufi@gmail.com', '349776');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bailam`
--
ALTER TABLE `bailam`
  ADD PRIMARY KEY (`MaBaiLam`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `MaBaiThi` (`MaBaiThi`);

--
-- Indexes for table `baithi`
--
ALTER TABLE `baithi`
  ADD PRIMARY KEY (`MaBaiThi`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCauHoi`);

--
-- Indexes for table `chitietbailam`
--
ALTER TABLE `chitietbailam`
  ADD PRIMARY KEY (`MaCTBL`),
  ADD KEY `MaBaiLam` (`MaBaiLam`),
  ADD KEY `MaCauHoi` (`MaCauHoi`);

--
-- Indexes for table `chitietbaithi`
--
ALTER TABLE `chitietbaithi`
  ADD PRIMARY KEY (`MaCTBT`),
  ADD KEY `MaBaiThi` (`MaBaiThi`),
  ADD KEY `MaCauHoi` (`MaCauHoi`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bailam`
--
ALTER TABLE `bailam`
  MODIFY `MaBaiLam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `baithi`
--
ALTER TABLE `baithi`
  MODIFY `MaBaiThi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCauHoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `chitietbailam`
--
ALTER TABLE `chitietbailam`
  MODIFY `MaCTBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chitietbaithi`
--
ALTER TABLE `chitietbaithi`
  MODIFY `MaCTBT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bailam`
--
ALTER TABLE `bailam`
  ADD CONSTRAINT `bailam_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `nguoidung` (`Id_User`),
  ADD CONSTRAINT `bailam_ibfk_2` FOREIGN KEY (`MaBaiThi`) REFERENCES `baithi` (`MaBaiThi`);

--
-- Constraints for table `chitietbailam`
--
ALTER TABLE `chitietbailam`
  ADD CONSTRAINT `chitietbailam_ibfk_1` FOREIGN KEY (`MaBaiLam`) REFERENCES `bailam` (`MaBaiLam`),
  ADD CONSTRAINT `chitietbailam_ibfk_2` FOREIGN KEY (`MaCauHoi`) REFERENCES `cauhoi` (`MaCauHoi`);

--
-- Constraints for table `chitietbaithi`
--
ALTER TABLE `chitietbaithi`
  ADD CONSTRAINT `chitietbaithi_ibfk_1` FOREIGN KEY (`MaBaiThi`) REFERENCES `baithi` (`MaBaiThi`),
  ADD CONSTRAINT `chitietbaithi_ibfk_2` FOREIGN KEY (`MaCauHoi`) REFERENCES `cauhoi` (`MaCauHoi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
