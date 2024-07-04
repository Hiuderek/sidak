-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Feb 2020 pada 08.54
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `name`, `email`, `username`, `password`, `role_id`, `date_created`) VALUES
(1, 'muhammad zulkifli', 'mzulkifliar@gmail.com', 'mzulkiflia', '$2y$10$2vEuh8EK2gtWNkHILGP.g.Oi/c7t4N/zURA1FlX2pKFX5dRq5O5M6', 1, 1575861882);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `id_user`, `role_id`, `username`, `status`, `menu`, `created`) VALUES
(44, 9, 3, 'gitaaaaa', 'menambahkan', 'Evaluasi Lulusan', 1567760052),
(45, 9, 3, 'gitaaaaa', 'menambahkan', 'Evaluasi Lulusan', 1567760105),
(46, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1568342438),
(47, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1568787548),
(48, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1568787570),
(49, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1568788046),
(50, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1568788141),
(51, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1569850405),
(52, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1569851038),
(53, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1569852737),
(54, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1569853588),
(55, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1569902846),
(56, 5, 3, 'kifliar', 'menambahkan', 'Mahasiswa dan Lulusan', 1569903051),
(57, 5, 3, 'kifliar', 'menambahkan', 'Mahasiswa dan Lulusan', 1569903151),
(58, 5, 3, 'kifliar', 'menambahkan', 'Mahasiswa dan Lulusan', 1569903233),
(59, 5, 3, 'kifliar', 'menambahkan', 'Karya Mahasiswa', 1572331712),
(60, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1574234527),
(61, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1574234601),
(62, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1574506956),
(63, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1574587557),
(64, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1574829400),
(65, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1574829460),
(66, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tetap', 1574829489),
(67, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tidak Tetap', 1574829512),
(68, 6, 2, 'anakus', 'mengubah', 'Kemampuan Dosen', 1574829536),
(69, 6, 2, 'anakus', 'mengubah', 'Karya Ilmiah', 1574829571),
(70, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1574829733),
(71, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1574829780),
(72, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1574829797),
(73, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1574829808),
(74, 5, 3, 'kifliar', 'mengubah', 'Karya Mahasiswa', 1574829846),
(75, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1574952459),
(76, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1575273553),
(77, 5, 3, 'kifliar', 'mengubah', 'Karya Mahasiswa', 1575643669),
(78, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1575732462),
(79, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1575732481),
(80, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1575733516),
(81, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1575733635),
(82, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1575733693),
(83, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tetap', 1575734728),
(84, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tetap', 1575734745),
(85, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tidak Tetap', 1575736223),
(86, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tidak Tetap', 1575736241),
(87, 6, 2, 'anakus', 'menambahkan', 'Kemampuan Dosen', 1575736762),
(88, 6, 2, 'anakus', 'mengubah', 'Kemampuan Dosen', 1575736773),
(89, 6, 2, 'anakus', 'menambahkan', 'Penelitian', 1575737077),
(90, 6, 2, 'anakus', 'menambahkan', 'Karya Ilmiah', 1575737476),
(91, 6, 2, 'anakus', 'mengubah', 'Karya Ilmiah', 1575737559),
(92, 6, 2, 'anakus', 'menambahkan', 'Pengabdian', 1575737782),
(93, 5, 3, 'kifliar', 'mengubah', 'Mahasiswa dan Lulusan', 1575738356),
(94, 5, 3, 'kifliar', 'menambahkan', 'Karya Mahasiswa', 1575738831),
(95, 5, 3, 'kifliar', 'mengubah', 'Karya Mahasiswa', 1575738845),
(96, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1575739143),
(97, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tetap', 1575773582),
(98, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tetap', 1575773743),
(99, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tidak Tetap', 1575775801),
(100, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tetap', 1576147278),
(101, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tetap', 1576147467),
(102, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576473402),
(103, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576473487),
(104, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576473498),
(105, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576473631),
(106, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576473725),
(107, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576474533),
(108, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576474639),
(109, 5, 3, 'kifliar', 'menambahkan', 'Evaluasi Lulusan', 1576474655),
(110, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576474713),
(111, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576474803),
(112, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576475158),
(113, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576475284),
(114, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576475662),
(115, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576475672),
(116, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576477415),
(117, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576477920),
(118, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576478074),
(119, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576478101),
(120, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576478286),
(121, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576478310),
(122, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576478403),
(123, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479045),
(124, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479281),
(125, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479379),
(126, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479512),
(127, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479800),
(128, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479926),
(129, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576479990),
(130, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576480240),
(131, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576480587),
(132, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576480609),
(133, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576498858),
(134, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576499390),
(135, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576499809),
(136, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500138),
(137, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500148),
(138, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500219),
(139, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500302),
(140, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500601),
(141, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576500652),
(142, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576501566),
(143, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576501625),
(144, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576502552),
(145, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576502679),
(146, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576502744),
(147, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576503025),
(148, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576503513),
(149, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576504090),
(150, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576507332),
(151, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576507586),
(152, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576507792),
(153, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576507849),
(154, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576508007),
(155, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576508404),
(156, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576508511),
(157, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576508546),
(158, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576508972),
(159, 5, 3, 'kifliar', 'menambahkan', 'Jumlah Mhs. Reguler', 1576509165),
(160, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576638390),
(161, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576638585),
(162, 6, 2, 'anakus', 'menambahkan', 'Aktvts Dosen Tidak Tetap', 1576639177),
(163, 6, 2, 'anakus', 'mengubah', 'Aktvts Dosen Tidak Tetap', 1576639192),
(164, 6, 2, 'anakus', 'menambahkan', 'Kemampuan Dosen', 1576639334),
(165, 6, 2, 'anakus', 'mengubah', 'Kemampuan Dosen', 1576639349),
(166, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576665890),
(167, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576665980),
(168, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576666522),
(169, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576666885),
(170, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576667147),
(171, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576667394),
(172, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576671078),
(173, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576671231),
(174, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576671931),
(175, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576672177),
(176, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576672514),
(177, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576675258),
(178, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576675573),
(179, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576677121),
(180, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576681740),
(181, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576682779),
(182, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576683529),
(183, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576683610),
(184, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576683679),
(185, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576683696),
(186, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576684015),
(187, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576684041),
(188, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576684774),
(189, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576685127),
(190, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576685159),
(191, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576685334),
(192, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576685392),
(193, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576685684),
(194, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576689818),
(195, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690188),
(196, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690223),
(197, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690254),
(198, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690542),
(199, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690629),
(200, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690689),
(201, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576690908),
(202, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576691152),
(203, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576691761),
(204, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576692233),
(205, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576692508),
(206, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576692631),
(207, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576692865),
(208, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576692902),
(209, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576693538),
(210, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576693688),
(211, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576693902),
(212, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576694027),
(213, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576694060),
(214, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576695757),
(215, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576695909),
(216, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576695992),
(217, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576696098),
(218, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576696132),
(219, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576696297),
(220, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576696368),
(221, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576696428),
(222, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1576696563),
(223, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1576696639),
(224, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576696939),
(225, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576697218),
(226, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576697227),
(227, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1576697384),
(228, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576697432),
(229, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576711662),
(230, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576711795),
(231, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576711897),
(232, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576712235),
(233, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576712300),
(234, 6, 2, 'anakus', 'mengubah', 'Dosen Tetap', 1576712316),
(235, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576712387),
(236, 6, 2, 'anakus', 'mengubah', 'Dosen Tidak Tetap', 1576712397),
(237, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1576713948),
(238, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1576714339),
(239, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1577518774),
(240, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1577519108),
(241, 6, 2, 'anakus', 'menambahkan', 'Dosen Tidak Tetap', 1577520503),
(242, 6, 2, 'anakus', 'menambahkan', 'Dosen Tetap', 1577611416);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitasmhs`
--

CREATE TABLE `aktivitasmhs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `tingkat_kegiatan` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitasmhs`
--

INSERT INTO `aktivitasmhs` (`id`, `id_user`, `nama`, `kegiatan`, `waktu`, `tingkat_kegiatan`, `prestasi`) VALUES
(1, 5, 'hasbun', 'halal bi halal', '2019-04-07', 'Lokal', 'juara 1 lomba praktik tayammum'),
(2, 5, 'Asbun', 'Merakit Perahu', '2019-03-12', 'Internasional', 'Didanai RP. 80.000.000,-'),
(3, 5, 'Johan', 'Lomba Baca Puisi', '2017-06-05', 'Lokal', 'Juara 1 '),
(6, 5, 'Ana Kusuma Araya', 'Pengenalan Kehidupan Kampus Mahasiswa Baru (PK2MABA) Program Teknologi Informasi dan Ilmu Komputer U', '2019-07-02', 'Wilayah', 'Didanai RP. 80.000.000,-'),
(9, 8, 'Ana Kusuma Araya', 'PKM STARTUP 4G LTE 2015 FAKULTAS ILMU KOMPUTER', '2019-06-29', 'Wilayah', 'Didanai RP. 80.000.000,-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas_dt`
--

CREATE TABLE `aktivitas_dt` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kodematkul` varchar(255) NOT NULL,
  `namamatkul` varchar(255) NOT NULL,
  `jumlahkelas` varchar(255) NOT NULL,
  `rencanakelas` varchar(255) NOT NULL,
  `sukseskelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitas_dt`
--

INSERT INTO `aktivitas_dt` (`id`, `id_user`, `id_dosen`, `bidang`, `kodematkul`, `namamatkul`, `jumlahkelas`, `rencanakelas`, `sukseskelas`) VALUES
(1, 6, 1, 'Fisiologi ', 'BI411331', 'Metabolisme Tumbuhan', '11', '22', '1'),
(2, 6, 2, 'Fisiologi Beruang', 'BI411331', 'Metabolisme Tumbuhan', '1', '9', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas_dtt`
--

CREATE TABLE `aktivitas_dtt` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `kodematkul` varchar(255) NOT NULL,
  `namamatkul` varchar(255) NOT NULL,
  `jumlahkelas` varchar(255) NOT NULL,
  `rencanakelas` varchar(255) NOT NULL,
  `sukseskelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitas_dtt`
--

INSERT INTO `aktivitas_dtt` (`id`, `id_user`, `id_dosen`, `bidang`, `kodematkul`, `namamatkul`, `jumlahkelas`, `rencanakelas`, `sukseskelas`) VALUES
(1, 6, 1, 'Fisiologi Beruang', 'BI411331', '1', '2', '17', '1'),
(2, 6, 2, 'Fisiologi Beruang', 'BI411331', '1', '2', '16', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosentdktetap`
--

CREATE TABLE `dosentdktetap` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gelardepan` varchar(255) NOT NULL,
  `gelarbelakang` varchar(255) NOT NULL,
  `pendidikan1` varchar(255) NOT NULL,
  `pendidikan2` varchar(255) NOT NULL,
  `pendidikan3` varchar(255) NOT NULL,
  `bidang1` varchar(255) NOT NULL,
  `bidang2` varchar(255) NOT NULL,
  `bidang3` varchar(255) NOT NULL,
  `suratbukti` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosentdktetap`
--

INSERT INTO `dosentdktetap` (`id`, `id_user`, `nama`, `nidn`, `tgl_lahir`, `jabatan`, `gelardepan`, `gelarbelakang`, `pendidikan1`, `pendidikan2`, `pendidikan3`, `bidang1`, `bidang2`, `bidang3`, `suratbukti`, `keterangan`) VALUES
(1, 6, 'I Wayan Supardi, S.Si., M.Si.', '0031037102', '1966-11-03', 'Dosen', '-', 'SSi. dan MSi.', 'S1. Universitas Andalas', 'S2. Unud', 'Tidak Ada', 'S1. Fisika', 'S2. Fisika', 'S3. Biologi', 'assets/pdf/1.pdf', 'Terverifikasi'),
(2, 6, 'I Gusti Ngurah Sutapa, MSi.', '0019076703', '1977-05-12', 'Lektor', '-', 'MSi.', 'S1. Unair', 'S2. UGM', 'Tidak Ada', 'S1. Biofisik', 'S2. Fisika', 'Tidak Ada', 'assets/pdf/2.pdf', 'Terverifikasi'),
(3, 6, 'Suleha Sulaili S.Kom., M.Kom.', '00-1905-6604', '2019-12-05', 'Lektor', '-', 'S.Kom, M.Kom.', 'UB', 'UB', 'Tidak Ada', 'Teknik Informatika', 'Teknik Informatika', 'Tidak Ada', 'assets/pdf/Data_Dosen_Tidak_Tetap.pdf', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosentetap`
--

CREATE TABLE `dosentetap` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gelardepan` varchar(255) NOT NULL,
  `gelarbelakang` varchar(255) NOT NULL,
  `pendidikan1` varchar(255) NOT NULL,
  `pendidikan2` varchar(255) NOT NULL,
  `pendidikan3` varchar(255) NOT NULL,
  `bidang1` varchar(255) NOT NULL,
  `bidang2` varchar(255) NOT NULL,
  `bidang3` varchar(255) NOT NULL,
  `suratbukti` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosentetap`
--

INSERT INTO `dosentetap` (`id`, `id_user`, `nama`, `nidn`, `tgl_lahir`, `jabatan`, `gelardepan`, `gelarbelakang`, `pendidikan1`, `pendidikan2`, `pendidikan3`, `bidang1`, `bidang2`, `bidang3`, `suratbukti`, `keterangan`) VALUES
(1, 6, 'Dra. Made Rai Suarni, M.Si.', '00-0809-6402', '1980-07-17', 'Lektor', 'Dra.', 'M.Si.', 'UGM', 'UB', 'Tidak Ada', 'S1. Biologi', 'S2. Biologi', 'Tidak Ada', 'assets/pdf/1.pdf', 'Terverifikasi'),
(2, 6, 'Dra. Ni Nyoman Wirasiti,M.Repro.', '00-0809-6402', '1983-09-06', 'Lektor', 'Dra.', 'M.Repro.', 'UDayana', 'UGM', 'Tidak Ada', 'S1. Biologi', 'S2. Biologi', 'Tidak Ada', 'assets/pdf/2.pdf', 'Terverifikasi'),
(4, 6, 'Ana Kusuma Ardani S.Kom., M.Kom.', '00-0809-6402', '2019-11-26', 'Lektor', '-', 'S.Kom, M.Kom.', 'UB', 'UB', 'Tidak Ada', 'Teknik Informatika', 'Teknik Informatika', 'Tidak Ada', 'assets/pdf/23_Kartu_Peserta_Seminar_Hasil.pdf', 'Terverifikasi'),
(5, 6, 'Beatus Bala', '0010015811', '1958-12-02', 'Lektor', 'Drs.', 'M.Si.', 'UB', 'UNHAS', 'Tidak Ada', 'Teknik Informatika', 'Teknik Informatika', 'Tidak Ada', 'assets/pdf/tandabukti.pdf', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `nilai1` float NOT NULL,
  `nilai2` float NOT NULL,
  `nilai3` float NOT NULL,
  `nilai4` float NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `evaluasi`
--

INSERT INTO `evaluasi` (`id_evaluasi`, `id_user`, `jenis`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `keterangan`) VALUES
(1, 5, 2, 222, 11, 1968, 0, 'tttt'),
(2, 5, 3, 566, 1635, 0, 0, 'teruskan'),
(3, 5, 3, 1, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyailmiah`
--

CREATE TABLE `karyailmiah` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `namadosen` varchar(255) NOT NULL,
  `publikasi` varchar(255) NOT NULL,
  `tahunpublikasi` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyailmiah`
--

INSERT INTO `karyailmiah` (`id`, `id_user`, `judul`, `namadosen`, `publikasi`, `tahunpublikasi`, `tingkat`) VALUES
(1, 6, 'Merakit Pesawat', 'Dra. Made Rai Suarni, M.Si.', 'Jurnal Internasionel', '2015', 'Lokal'),
(2, 6, 'Merakit Pesawat', 'Bambang Suleman', 'Jurnal Lokal', '2008', 'Lokal'),
(3, 6, 'Merakit Pesawat', 'Muhammad Curururup', 'Jurnal Lokal', '2008', 'Nasional'),
(4, 6, 'coba', 'kusna', 'buku tulis', '2019', 'internasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_lulusan`
--

CREATE TABLE `mhs_lulusan` (
  `id` int(128) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `dayaTampung` int(11) DEFAULT NULL,
  `seleksi` int(11) DEFAULT NULL,
  `lulus` int(11) DEFAULT NULL,
  `maba_reg` int(11) DEFAULT NULL,
  `maba_transfer` int(11) DEFAULT NULL,
  `mhs_reg` int(11) DEFAULT NULL,
  `mhs_transfer` int(11) DEFAULT NULL,
  `lulusan_reg` int(11) DEFAULT NULL,
  `lulusan_transfer` int(11) DEFAULT NULL,
  `ipk_min` double DEFAULT NULL,
  `ipk_rat` double DEFAULT NULL,
  `ipk_mak` double DEFAULT NULL,
  `persen_min` double DEFAULT NULL,
  `persen_mid` double DEFAULT NULL,
  `persen_mak` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs_lulusan`
--

INSERT INTO `mhs_lulusan` (`id`, `id_user`, `tahun`, `dayaTampung`, `seleksi`, `lulus`, `maba_reg`, `maba_transfer`, `mhs_reg`, `mhs_transfer`, `lulusan_reg`, `lulusan_transfer`, `ipk_min`, `ipk_rat`, `ipk_mak`, `persen_min`, `persen_mid`, `persen_mak`) VALUES
(1, 5, '2014/2015', 400, 500, 143, 143, 1, 143, 1, 143, 0, 2.7, 3, 4, 1, 1, 1),
(5, 5, '2015/2016', 250, 1000, 250, 250, 0, 250, 13, 250, 0, 2.7, 3.1, 3.89, 1, 1, 1),
(6, 5, '2016/2017', 550, 1000, 550, 550, 0, 550, 0, 550, 0, 2.6, 3.2, 3.9, 40, 30, 480),
(7, 5, '2017/2018', 600, 5000, 600, 600, 4, 600, 5, 600, 4, 2.5, 3, 3.9, 200, 200, 204),
(9, 5, '2018/2019', 333, 33, 33, 33, 32, 33, 33, 33, 33, 3, 3, 3.99, 3, 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs_reguler`
--

CREATE TABLE `mhs_reguler` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahunmasuk` varchar(255) NOT NULL,
  `tahun1` int(11) DEFAULT NULL,
  `tahun2` int(11) DEFAULT NULL,
  `tahun3` int(11) DEFAULT NULL,
  `tahun4` int(11) DEFAULT NULL,
  `tahun5` int(11) DEFAULT NULL,
  `tahun6` int(11) DEFAULT NULL,
  `tahun7` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs_reguler`
--

INSERT INTO `mhs_reguler` (`id`, `id_user`, `tahunmasuk`, `tahun1`, `tahun2`, `tahun3`, `tahun4`, `tahun5`, `tahun6`, `tahun7`) VALUES
(1, 5, '2013-2014', 33, 88, 0, 0, 0, 0, 0),
(2, 5, '2012-2013', 33, 0, 0, 0, 0, 0, 0),
(3, 5, '2014-2015', 55, 55, 55, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sumber` int(11) NOT NULL,
  `tahun1` int(11) DEFAULT NULL,
  `tahun2` int(11) DEFAULT NULL,
  `tahun3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `id_user`, `sumber`, `tahun1`, `tahun2`, `tahun3`) VALUES
(2, 6, 2, 22, 4, 11),
(3, 6, 4, 122, 2, 33),
(4, 6, 3, 11, 11, 11),
(5, 6, 1, 99, 99, 99);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id_pengabdian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sumber` int(11) NOT NULL,
  `tahun1` int(11) DEFAULT NULL,
  `tahun2` int(11) DEFAULT NULL,
  `tahun3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengabdian`
--

INSERT INTO `pengabdian` (`id_pengabdian`, `id_user`, `sumber`, `tahun1`, `tahun2`, `tahun3`) VALUES
(1, 6, 1, 2, 2, 2),
(2, 6, 4, 1, 33, 45),
(3, 6, 5, 33, 33, 33),
(5, 6, 2, 44, 33, 55);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `name`, `email`, `username`, `password`, `role_id`, `date_created`) VALUES
(1, 'muhammad zulkifli', 'mzulkifliar@gmail.com', 'mzulkiflia', '$2y$10$W14VH8OXA6qk7mJZTye50uDhRYDrCF1NdV561dMgq0SpElBu6AcMm', 1, 1575862242),
(5, 'Sulaiman haha', 'sulaiman@gmail.com', 'kifliar', '$2y$10$14iCyoea1sSschPgRSkm2u5iQp9KZ3KNmhCWC.euAXNrjX2VYLSmG', 3, 1560929748),
(6, 'Ana Kusuma Ardano', 'anakusumaard26@gmail.com', 'anakus', '$2y$10$wwKitJBidcy/kREZELbDrekvdHV3iirSNF0JY5ZW61zcXQKiXRDZm', 2, 1560930183),
(7, 'ngasal', 'ngasal@gmail.com', 'kip', '$2y$10$dcwPIbkKpTX6Nym0Xny3Xun1oY9HP09DJGJQ3qSyc.W5icMr7kpp2', 2, 1563176198),
(8, 'adada', 'anakusuma@gmail.com', 'adada', '$2y$10$P8FpeqNAqwafC/2sAaNcUeGvF5SzLozxxSpMiME1o9JdgIAWkdaTC', 3, 1563176332),
(9, 'gita', 'gitauhut@gmail.com', 'gitaaaaa', '$2y$10$OfJKHnDG0IkmOvufh7FK.ezgkZLpRcIEGp3oLuLGv79TbeIqeQjmm', 3, 1567759925),
(12, 'co', 'kifliar@gmail.com', 'kipu', '$2y$10$JtN36ctPD/aszvjHG530lehcN0pe89Zp1ETy7SUEdZO5ExWlGQ9RS', 3, 1567759925);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peningkatandosen`
--

CREATE TABLE `peningkatandosen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `bidang_studi` varchar(255) NOT NULL,
  `perguruan_tinggi` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `peningkatandosen`
--

INSERT INTO `peningkatandosen` (`id`, `id_user`, `nama`, `jenjang`, `bidang_studi`, `perguruan_tinggi`, `negara`, `tahun`) VALUES
(3, 6, 'Dra. Made Rai Suarni, M.Si.', 'S3', 'ddddd', 'lkjlkj', 'lkj', 'lkj'),
(4, 6, 'Ana Kusuma ardani', 'S3', 'kjlkjlkj', 'Oxford', 'lkj', '2008');

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `id` int(144) NOT NULL,
  `nama_universitas` varchar(444) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`id`, `nama_universitas`) VALUES
(1, 'Universitas Syiah Kuala, Banda Aceh\r\n'),
(2, 'Universitas Malikussaleh, Lhokseumawe\r\n'),
(3, 'Politeknik Negeri Lhokseumawe, Lhokseumawe\r\n'),
(4, 'Politeknik Negeri Aceh, Banda Aceh\r\n'),
(5, 'Universitas Samudra, Langsa\r\n'),
(6, 'Universitas Teuku Umar, Meulaboh\r\n'),
(7, 'Politeknik Aceh, Banda Aceh\r\n'),
(8, 'UIN Ar-Raniry, Banda Aceh\r\n'),
(9, 'STAIN Malikussaleh, Lhokseumawe\r\n'),
(10, 'STAIN Zawiyah Cot Kala, Langsa\r\n'),
(11, 'Akademi Komunitas Negeri (AKN) Aceh Barat Daya\r\n'),
(12, 'STAIN Gajah Putih Takengon\r\n'),
(13, 'IAIN Langsa, Langsa\r\n'),
(14, 'STAIN Malikussaleh, Lhokseumawe\r\n'),
(15, 'STAIN Gajah Putih Takengon, Takengon\r\n'),
(16, 'STAIN Teungku Dirundeng, Melabuh\r\n'),
(17, 'Politeknik Kesehatan Banda Aceh\r\n'),
(18, 'Universitas Serambi Mekkah\r\n'),
(19, 'Universitas Sumatera Utara, Medan\r\n'),
(20, 'Universitas Negeri Medan, Medan\r\n'),
(21, 'Politeknik Negeri Medan, Medan\r\n'),
(22, 'Politeknik Negeri Media Kreatif, Medan\r\n'),
(23, 'Institut Agama Islam Negeri Sumatera utara, Medan\r\n'),
(24, 'Poltekes Depkes Medan, Medan\r\n'),
(25, 'STAIN Padang Sidempuan, Padang Sidempuan\r\n'),
(26, 'UIN Sumatera Utara, Medan\r\n'),
(27, 'IAIN Padang Sidempuan, Tapanuli Selatan\r\n'),
(28, 'Akademi Teknik Keselamatan Penerbangan (ATKP) Medan\r\n'),
(29, 'Sekolah Tinggi Agama Kristen Protestan Negeri Tarutung\r\n'),
(30, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Medan\r\n'),
(31, 'Politeknik Negeri Medan\r\n'),
(32, 'kademi Tek. Kes. Penerbangan (ATKP), Medan\r\n'),
(33, 'Sekolah Tinggi Penyuluhan Pertanian Medan \r\n'),
(34, 'Universitas Andalas, Padang\r\n'),
(35, 'Universitas Negeri Padang, Padang\r\n'),
(36, 'Politeknik Negeri Padang, Padang\r\n'),
(37, 'Politeknik Pertanian, Payakumbuh\r\n'),
(38, 'STSI (Sekolah Tinggi Seni Indonesia Padang Panjang), Padang Panjang\r\n'),
(39, 'IAIN Imam Bonjol, Padang\r\n'),
(40, 'STAIN Batusangkar\r\n'),
(41, 'STAIN Bukittinggi\r\n'),
(42, 'ISI Padang Panjang\r\n'),
(43, 'IAIN Imam Bonjol, Padang\r\n'),
(44, 'STAIN Sjech M. Djamil Djambek , Bukittinggi\r\n'),
(45, 'Politeknik Negeri Sriwijaya\r\n'),
(46, 'Universitas Riau, Pekanbaru\r\n'),
(47, 'UIN Sultan Syarif Kasim (SUSKA), Pekanbaru\r\n'),
(48, 'Politeknik Negeri Bengkalis\r\n'),
(49, 'Universitas Maritim Raja Ali Haji\r\n'),
(50, 'Politeknik Negeri Batam\r\n'),
(51, 'UIN Sultan Syarif Kasim, Riau\r\n'),
(52, 'STAIN Bengkalis, Riau (Riau)\r\n'),
(53, 'Universitas Jambi, Jambi\r\n'),
(54, 'STAIN Kerinci\r\n'),
(55, 'IAIN Sultan Thaha Saifuddin\r\n'),
(56, 'Politeknik Kesehatan Jambi\r\n'),
(57, 'Universitas Bengkulu, Bengkulu\r\n'),
(58, 'IAIN Bengkulu\r\n'),
(59, 'STAIN CURUP\r\n'),
(60, 'Poltekkes Kemenkes Bengkulu\r\n'),
(61, 'STAIN Curup, Rejang Lebong\r\n'),
(62, 'Universitas Sriwijaya, Palembang\r\n'),
(63, 'Politeknik Negeri Sriwijaya, Palembang\r\n'),
(64, 'Poltekkes depkes Palembang, Palembang\r\n'),
(65, 'Akademi Komunitas Negeri Prabumulih, Prabumulih\r\n'),
(66, 'IAIN Raden Fatah\r\n'),
(67, 'Universitas Lampung, Bandar Lampung\r\n'),
(68, 'Politeknik Negeri Lampung, Bandar Lampung\r\n'),
(69, 'Poltekkes Kemenkes Tanjungkarang, Bandar Lampung\r\n'),
(70, 'STIM (Sekolah Tinggi Olahraga Metro), Kota Metro\r\n'),
(71, 'Institut Agama Islam Negeri Raden Intan, Bandar Lampung\r\n'),
(72, 'STAIN Jurai Siwo Metro\r\n'),
(73, 'IAIN Raden Intan, Bandar Lampung\r\n'),
(74, 'Universitas Bangka Belitung, Bangka Belitung\r\n'),
(75, 'Politeknik Manufaktur, Bangka Belitung\r\n'),
(76, 'Poltekkes Kemenkes Pangkal Pinang, Bangka Belitung\r\n'),
(77, 'STAIN Syekh Abdurrahman Siddik, Bangka Belitung\r\n'),
(78, 'Universitas Sultan Ageng Tirtayasa, Serang\r\n'),
(79, 'Perguruan Tinggi Buddhi, Karawaci\r\n'),
(80, 'IAIN Sultan Maulana Hasanuddin\r\n'),
(81, 'Universitas Pendidikan Indonesia, Kampus Daerah Serang\r\n'),
(82, 'Universitas Terbuka Pondok Cabe\r\n'),
(83, 'Sekolah Tinggi Agama Buddha Negeri Sriwijaya Tangerang\r\n'),
(84, 'Akademi Meteorologi dan Geofisika (AMG) Tangerang\r\n'),
(85, 'Institut Agama Islam Banten (IAIB)\r\n'),
(86, 'Universitas Indonesia\r\n'),
(87, 'Universitas Pertahanan Indonesia (UNHAN)\r\n'),
(88, 'Universitas Negeri Jakarta\r\n'),
(89, 'Universitas Terbuka\r\n'),
(90, 'Politeknik Negeri Jakarta\r\n'),
(91, 'Politeknik Negeri Media Kreatif, Jakarta\r\n'),
(92, 'UIN Syarif Hidayatullah Jakartaâ€Ž\r\n'),
(93, 'Sekolah Tinggi Ilmu Pelayaran Jakarta\r\n'),
(94, 'Sekolah Tinggi Manajemen Industri Indonesia\r\n'),
(95, 'Akademi Pimpinan Perusahaan (APP), Jakarta\r\n'),
(96, 'Institut Ilmu Pemerintahan, IIP, Jakarta\r\n'),
(97, 'Sekolah Tinggi Akuntansi Negara, STAN\r\n'),
(98, 'Sekolah Tinggi Hukum Militer, STHM\r\n'),
(99, 'Sekolah Tinggi Ilmu Administrasi, LAN Jakarta\r\n'),
(100, 'Sekolah Tinggi Ilmu Kepolisian (PTIK), Jakarta\r\n'),
(101, 'Sekolah Tinggi Ilmu Pelayaran (STIP), Jakarta\r\n'),
(102, 'Sekolah Tinggi Ilmu Statistik (STIS), Jakarta\r\n'),
(103, 'Sekolah Tinggi Manajemen Industri(STMI), Jakarta\r\n'),
(104, 'Sekolah Tinggi Penerbangan Indonesia (PI), Jakarta\r\n'),
(105, 'Sekolah Tinggi Perikanan (STP), Jakarta\r\n'),
(106, 'Politeknik Kesehatan Jakarta I   \r\n'),
(107, 'Politeknik Kesehatan Jakarta II\r\n'),
(108, 'Politeknik Negeri Jakarta\r\n'),
(109, 'Politeknik Manufaktur Negeri Bandung, Bandung\r\n'),
(110, 'Universitas Pendidikan Indonesia, Bandung\r\n'),
(111, 'Universitas Padjadjaran, Bandung\r\n'),
(112, 'Universitas Jenderal Achmad Yani, Bandung\r\n'),
(113, 'Institut Pertanian Bogor, Bogor\r\n'),
(114, 'Institut Teknologi Bandung, Bandung\r\n'),
(115, 'Politeknik Negeri Bandung, Bandung\r\n'),
(116, 'Politeknik Indramayu, Indramayu\r\n'),
(117, 'Universitas Siliwangi (UNSIL), Tasikmalaya\r\n'),
(118, 'niversitas Singaperbangsa (UNSIKA), Kampus Daerah Karawang\r\n'),
(119, 'Universitas Swadaya Gunung Jati (Unswagati) di Kota Cirebon\r\n'),
(120, 'Universitas Pendidikan Indonesia, Kampus Daerah Cibiru\r\n'),
(121, 'Universitas Pendidikan Indonesia, Kampus Daerah Tasikmalaya\r\n'),
(122, 'Universitas Pendidikan Indonesia, Kampus Daerah Sumedang\r\n'),
(123, 'Universitas Pendidikan Indonesia, Kampus Daerah Purwakarta\r\n'),
(124, 'Akademi Ilmu Pemasyarakatan (AKIP), Depok\r\n'),
(125, 'Akademi Imigrasi (AIM) Depok\r\n'),
(126, 'Akademi Kimia Analis (AKA) Bogor\r\n'),
(127, 'Sekolah Tinggi Ilmu Administrasi, Bandung\r\n'),
(128, 'Sekolah Tinggi Sandi Negara (STSN), Bogor\r\n'),
(129, 'Sekolah Tinggi Seni Indonesia (STSI), Bandung\r\n'),
(130, 'Sekolah Tinggi Transportasi Darat (STTD), Bekasi\r\n'),
(131, 'Sekolah Tinggi Kesejahteraan Sosial (STKS), Bandung\r\n'),
(132, 'Sekolah Tinggi Pemerintahan Dalam Negeri (STPDN), Sumedang\r\n'),
(133, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Bogor\r\n'),
(134, 'STAIN Cirebon\r\n'),
(135, 'Politeknik Kesehatan Bandung\r\n'),
(136, 'Politeknik Manufaktur Bandung\r\n'),
(137, 'Politeknik Negeri Bali, Badung\r\n'),
(138, 'Universitas Diponegoro, Semarang\r\n'),
(139, 'Universitas Negeri Semarang, Semarang\r\n'),
(140, 'Universitas Jenderal Soedirman, Purwokerto\r\n'),
(141, 'Universitas Negeri Surakarta Sebelas Maret, Surakarta\r\n'),
(142, 'Politeknik Negeri Semarang, Semarang \r\n'),
(143, 'Politeknik Maritim Negeri Indonesia, Semarang\r\n'),
(144, 'Institut Seni Indonesia Surakarta, Surakarta (ISI Solo, dahulu STSI)\r\n'),
(145, 'Universitas Tidar Magelang, Magelang\r\n'),
(146, 'UIN Walisongo, Semarang\r\n'),
(147, 'IAIN Surakarta, Surakarta\r\n'),
(148, 'STAIN Kudus, Kudus\r\n'),
(149, 'STAIN Pekalongan, Pekalongan\r\n'),
(150, 'IAIN Salatiga, Salatiga\r\n'),
(151, 'IAIN Purwokerto, Purwokerto\r\n'),
(152, 'Akademi Kepolisian (AKPOL),Semarang\r\n'),
(153, 'Akademi Militer (AKMIL) TNI AD, Magelang\r\n'),
(154, 'Akademi Minyak dan Gas Bumi (AKAMIGAS), Blora\r\n'),
(155, 'Akademi Sanitasi dan Kesehatan Lingkungan (ASKK), Purwokerto\r\n'),
(156, 'Sekolah Tinggi Seni Indonesia (STSI), Surakarta\r\n'),
(157, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Magelang\r\n'),
(158, 'Politeknik Ilmu Pelayaran Semarang\r\n'),
(159, 'Politeknik Kesehatan Semarang\r\n'),
(160, 'Politeknik Kesehatan Surakarta\r\n'),
(161, 'Universitas Gadjah Mada\r\n'),
(162, 'Universitas Negeri Yogyakarta\r\n'),
(163, 'Institut Seni Indonesia Yogyakarta\r\n'),
(164, 'Universita Terbuka  UPBJJ Yogyakarta\r\n'),
(165, 'Akademi Teknologi Kulit Yogyakarta (ATK)\r\n'),
(166, 'Universitas Pembangunan Nasional Veteran (UPN), Yogyakarta\r\n'),
(167, 'UIN Sunan Kalijaga\r\n'),
(168, 'Akademi Angkatan Udara (AAU), Yogyakarta\r\n'),
(169, 'Sekolah Tinggi Pertanahan Nasional (STPN), Yogyakarta\r\n'),
(170, 'Sekolah Tinggi Teknologi Nuklir (STTN), Yogyakarta\r\n'),
(171, 'Politeknik Kesehatan Yogyakarta\r\n'),
(172, 'Universitas Airlangga, Surabaya\r\n'),
(173, 'Universitas Negeri Surabaya, Surabaya\r\n'),
(174, 'Universitas Brawijaya, Malang\r\n'),
(175, 'Universitas Negeri Malang, Malang\r\n'),
(176, 'Universitas Jember, Jember\r\n'),
(177, 'Universitas Trunojoyo, Bangkalan\r\n'),
(178, 'Politeknik Elektronika Negeri Surabaya, Surabaya\r\n'),
(179, 'Politeknik Perkapalan Negeri Surabaya, Surabaya\r\n'),
(180, 'Politeknik Negeri Madura, Sampang\r\n'),
(181, 'Politeknik Negeri Malang, Malang\r\n'),
(182, 'Politeknik Negeri Madiun, Madiun\r\n'),
(183, 'Politeknik Negeri Jember, Jember\r\n'),
(184, 'Institut Teknologi Sepuluh Nopember, Surabaya\r\n'),
(185, 'Akademi Komunitas Negeri, Bojonegoro\r\n'),
(186, 'Akademi Komunitas Negeri, Pacitan\r\n'),
(187, 'Universitas Pembangunan Nasional Veteran (UPN), Surabaya\r\n'),
(188, 'Politeknik Negeri Banyuwangi, Banyuwangi\r\n'),
(189, 'Akademi Komunitas Negeri Lamongan, Lamongan\r\n'),
(190, 'Akademi Komunitas Negeri Sumenep. Sumenep\r\n'),
(191, 'Akademi Komunitas Negeri Bojonegoro, Bojonegoro\r\n'),
(192, 'Universitas Islam Negeri Maulana Malik Ibrahim, Malang\r\n'),
(193, 'STAIN Kediri\r\n'),
(194, 'STAIN Ponorogo\r\n'),
(195, 'UIN Sunan Ampel\r\n'),
(196, 'IAIN Tulungagung\r\n'),
(197, 'UIN Maulana Malik Ibrahim, Malang\r\n'),
(198, 'STAIN Pamekasan, Pamekasan\r\n'),
(199, 'Akademi Angkatan Laut (AAL), Surabaya\r\n'),
(200, 'Teknik Keselamatan Penerbangan (ATKP) Surabaya\r\n'),
(201, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Malang\r\n'),
(202, 'IAIN Jember, Jember\r\n'),
(203, 'Politeknik Elektronika Negeri Surabaya\r\n'),
(204, 'Politeknik Kesehatan Malang\r\n'),
(205, 'Politeknik Kesehatan Surabaya\r\n'),
(206, 'Politeknik Pertanian Negeri Jember\r\n'),
(207, 'Akademi TKP â€“ Surabaya \r\n'),
(208, 'Universitas Mataram, Mataram\r\n'),
(209, 'IAIN Mataram, Lombok\r\n'),
(210, 'Sekolah Tinggi Agama Hindu Negeri (STAHN) Gde Puja, Mataram\r\n'),
(211, 'Universitas Nusa Cendana, Kupang\r\n'),
(212, 'Politeknik Negeri Kupang, Kupang\r\n'),
(213, 'Politeknik Pertanian Negeri Kupang, Kupang\r\n'),
(214, 'Universitas Udayana, Denpasar\r\n'),
(215, 'Universitas Pendidikan Ganesha, Singaraja\r\n'),
(216, 'Politeknik Negeri Bali, Kuta-Badung\r\n'),
(217, 'Institut Seni Indonesia Denpasar, Denpasar\r\n'),
(218, 'Politeknik Negeri Tanah Lot\r\n'),
(219, 'Institut Hindu Dharma Negeri (IHDN) Denpasar\r\n'),
(220, 'Akademi Kebidanan Pemprov Bali singaraja\r\n'),
(221, 'Sekolah Tinggi Pariwisata Bali\r\n'),
(222, 'Sekolah Tinggi Agama Kristen Negeri (STAKN) Denpasar\r\n'),
(223, 'Politeknik Kesehatan Denpasar\r\n'),
(224, 'Universitas Tanjungpura, Pontianak\r\n'),
(225, 'Politeknik Negeri Pontianak, Pontianak\r\n'),
(226, 'Politeknik Kesehatan Kementerian Kesehatan, Pontianak\r\n'),
(227, 'Politeknik Terpikat Sambas\r\n'),
(228, 'Politeknik Tonggak Equator\r\n'),
(229, 'Politeknik Ketapang\r\n'),
(230, 'Politeknik Tunas Bangsa\r\n'),
(231, 'IAIN Pontianak sebelumnya STAIN Pontianak\r\n'),
(232, 'Universitas Palangka Raya, Palangka Raya\r\n'),
(233, 'IAIN Palangkaraya, Palangkaraya\r\n'),
(234, 'Sekolah Tinggi Agama Hindu Negeri Tampung Peyang, Palangka Raya\r\n'),
(235, 'Sekolah Tinggi Agama Kristen Negeri (STAKN) Palangkaraya\r\n'),
(236, 'Universitas Lambung Mangkurat, Banjarmasin\r\n'),
(237, 'Politeknik Negeri Banjarmasin, Banjarmasin\r\n'),
(238, 'IAIN ANTASARI, Banjarmasin\r\n'),
(239, 'Poltekkes Banjarmasin\r\n'),
(240, 'Ooliteknik Pertanian Negeri Samarinda\r\n'),
(241, 'Universitas Mulawarman, Samarinda\r\n'),
(242, 'Politeknik Negeri Samarinda, Samarinda\r\n'),
(243, 'Politeknik Pertanian Negeri Samarinda, Samarinda\r\n'),
(244, 'Universitas Borneo Tarakan, Tarakan\r\n'),
(245, 'Politeknik Balikpapan, Balikpapan\r\n'),
(246, 'IAIN Samarinda, Samarinda\r\n'),
(247, 'Universitas Borneo Tarakan\r\n'),
(248, 'Universitas Sam Ratulangi, Manado\r\n'),
(249, 'Universitas Negeri Manado, Manado\r\n'),
(250, 'Politeknik Negeri Manado, Manado\r\n'),
(251, 'Politeknik Negeri Nusa Utara, Tahuna\r\n'),
(252, 'IAIN Manado, Manado (Sulawesi Utara)\r\n'),
(253, 'Politeknik Kesehatan Manado\r\n'),
(254, 'Politeknik Negeri Manado\r\n'),
(255, 'Universitas Negeri Gorontalo, Gorontalo\r\n'),
(256, 'IAIN Sultan Amai, Gorontalo\r\n'),
(257, 'Universitas Tadulako, Palu\r\n'),
(258, 'Sekolah Tinggi Ilmu Ekonomi (YPP Mujahidin), Tolitoli\r\n'),
(259, 'IAIN Dato Karamau, Palu\r\n'),
(260, 'STAIN Datokarama, Palu\r\n'),
(261, 'Politeknik Kesehatan Kemenkes Makassar, Makassar\r\n'),
(262, 'Universitas Hasanuddin, Makassar\r\n'),
(263, 'Universitas Negeri Makassar\r\n'),
(264, 'Politeknik Pertanian Negeri Pangkajene Kepulauan, Pangkajene Kepulauan\r\n'),
(265, 'Politeknik Negeri Ujung pandang, Makassar\r\n'),
(266, 'Universitas Maiwa Enrekang\r\n'),
(267, 'Politeknik Negeri Media Kreatif, Makassar\r\n'),
(268, 'Universitas Islam Negeri Makassar\r\n'),
(269, 'UIN Alauddin, Makassar\r\n'),
(270, 'STAIN Watampone, Bone\r\n'),
(271, 'STAIN Parepare, Parepare\r\n'),
(272, 'IAIN Palopo, Palopo\r\n'),
(273, 'Akademi Teknik Keselamatan Penerbangan (ATKP) Makasar\r\n'),
(274, 'Sekolah Tinggi Ilmu Adm, Ujung Pandang\r\n'),
(275, 'Sekolah Tinggi Seni Indonesia, Padang Panjang\r\n'),
(276, 'Sekolah Tinggi Agama Kristen Negeri (STAKN) Toraja\r\n'),
(277, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Gowa\r\n'),
(278, 'Akademi Teknik Keselamatan Penerbangan Makasar\r\n'),
(279, 'Universitas Haluoleo, Kendari\r\n'),
(280, 'Sekolah Tinggi Pertanian (STIP) Muna Kampus Baru, Muna\r\n'),
(281, 'STAIN Kendari\r\n'),
(282, 'Universitas 19 November Kolaka\r\n'),
(283, 'Universitas Muhammadiyah Kendari\r\n'),
(284, 'Universitas Lakidende\r\n'),
(285, 'Universitas Dayanu Iksanudin\r\n'),
(286, 'Universitas Muhammadiyah Buton\r\n'),
(287, 'Universitas Sulawesi Tenggara\r\n'),
(288, 'IAIN Kendari, Palu\r\n'),
(289, 'Universitas Negeri Sulawesi Barat\r\n'),
(290, 'Universitas Pattimura, Ambon\r\n'),
(291, 'Universitas Darussalam, Ambon\r\n'),
(292, 'Politeknik Negeri Ambon, Ambon\r\n'),
(293, 'Politeknik Perikanan Negeri Tual, Tual\r\n'),
(294, 'STAKPN Ambon\r\n'),
(295, 'IAIN Ambon\r\n'),
(296, 'Sekolah Tinggi Agama Kristen Protestan Negeri Ambon\r\n'),
(297, 'STAIN Ambon\r\n'),
(298, 'Universitas Khairun, Ternate\r\n'),
(299, 'IAIN Ternate, Ternate\r\n'),
(300, 'Universitas Cendrawasih, Jayapura\r\n'),
(301, 'Universitas Musamus Merauke, Merauke\r\n'),
(302, 'STAIN Al-Fatah, Jayapura\r\n'),
(303, 'Sekolah Tinggi. Agama Kristen Negeri (STAKN) Jayapura\r\n'),
(304, 'Universitas Negeri Papua, Manokwari \r\n'),
(305, 'STAIN Sorong, Sorong\r\n'),
(306, 'Sekolah Tinggi Penyuluhan Pertanian (STTP) Manokwari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `aktivitasmhs`
--
ALTER TABLE `aktivitasmhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `aktivitas_dt`
--
ALTER TABLE `aktivitas_dt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `aktivitas_dtt`
--
ALTER TABLE `aktivitas_dtt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dosen` (`id_dosen`) USING BTREE;

--
-- Indexes for table `dosentdktetap`
--
ALTER TABLE `dosentdktetap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dosentetap`
--
ALTER TABLE `dosentetap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mhs_lulusan`
--
ALTER TABLE `mhs_lulusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mhs_reguler`
--
ALTER TABLE `mhs_reguler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id_pengabdian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `peningkatandosen`
--
ALTER TABLE `peningkatandosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `aktivitasmhs`
--
ALTER TABLE `aktivitasmhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `aktivitas_dt`
--
ALTER TABLE `aktivitas_dt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aktivitas_dtt`
--
ALTER TABLE `aktivitas_dtt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dosentdktetap`
--
ALTER TABLE `dosentdktetap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dosentetap`
--
ALTER TABLE `dosentetap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `karyailmiah`
--
ALTER TABLE `karyailmiah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mhs_lulusan`
--
ALTER TABLE `mhs_lulusan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mhs_reguler`
--
ALTER TABLE `mhs_reguler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `peningkatandosen`
--
ALTER TABLE `peningkatandosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(144) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD CONSTRAINT `aktivitas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `aktivitasmhs`
--
ALTER TABLE `aktivitasmhs`
  ADD CONSTRAINT `aktivitasmhs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `aktivitas_dt`
--
ALTER TABLE `aktivitas_dt`
  ADD CONSTRAINT `aktivitas_dt_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`),
  ADD CONSTRAINT `aktivitas_dt_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosentetap` (`id`);

--
-- Ketidakleluasaan untuk tabel `aktivitas_dtt`
--
ALTER TABLE `aktivitas_dtt`
  ADD CONSTRAINT `aktivitas_dtt_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`),
  ADD CONSTRAINT `aktivitas_dtt_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosentdktetap` (`id`);

--
-- Ketidakleluasaan untuk tabel `dosentdktetap`
--
ALTER TABLE `dosentdktetap`
  ADD CONSTRAINT `dosentdktetap_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `dosentetap`
--
ALTER TABLE `dosentetap`
  ADD CONSTRAINT `dosentetap_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `karyailmiah`
--
ALTER TABLE `karyailmiah`
  ADD CONSTRAINT `karyailmiah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mhs_lulusan`
--
ALTER TABLE `mhs_lulusan`
  ADD CONSTRAINT `mhs_lulusan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mhs_reguler`
--
ALTER TABLE `mhs_reguler`
  ADD CONSTRAINT `mhs_reguler_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD CONSTRAINT `pengabdian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `peningkatandosen`
--
ALTER TABLE `peningkatandosen`
  ADD CONSTRAINT `peningkatandosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
