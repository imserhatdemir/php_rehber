-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Haz 2020, 00:44:04
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `serhat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giriscıkıs`
--

CREATE TABLE `giriscıkıs` (
  `id` int(50) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `giris` datetime NOT NULL,
  `cıkıs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `giriscıkıs`
--

INSERT INTO `giriscıkıs` (`id`, `kullanici_adi`, `giris`, `cıkıs`) VALUES
(0, 'serhat', '2020-06-21 23:57:22', '2020-06-22 00:22:58'),
(0, 'serhat', '2020-06-22 00:23:08', '0000-00-00 00:00:00'),
(0, 'serhat', '2020-06-22 00:24:18', '0000-00-00 00:00:00'),
(0, 'serhat', '2020-06-22 00:25:22', '0000-00-00 00:00:00'),
(0, 'serhatdemir', '2020-06-22 00:36:58', '2020-06-22 00:40:11'),
(0, 'serhatdemir', '2020-06-22 00:40:16', '0000-00-00 00:00:00'),
(0, 'zarok', '2020-06-22 00:46:45', '2020-06-22 00:48:28'),
(0, 'zarok', '2020-06-22 00:48:32', '2020-06-22 00:49:53'),
(0, 'admin', '2020-06-22 00:54:31', '0000-00-00 00:00:00'),
(0, 'admin', '2020-06-22 00:57:12', '2020-06-22 00:59:37'),
(0, 'admin', '2020-06-22 00:59:41', '2020-06-22 00:59:53'),
(0, 'çomü', '2020-06-22 01:07:58', '0000-00-00 00:00:00'),
(0, 'admin', '2020-06-22 01:17:02', '2020-06-22 01:24:48'),
(0, 'serhat', '2020-06-22 01:24:52', '2020-06-22 01:36:24'),
(0, 'admin', '2020-06-22 01:37:36', '2020-06-22 01:39:09'),
(0, 'admin', '2020-06-22 01:39:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gruplar`
--

CREATE TABLE `gruplar` (
  `id` int(50) NOT NULL,
  `grup_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `gruplar`
--

INSERT INTO `gruplar` (`id`, `grup_adi`) VALUES
(0, 'OKUL'),
(0, 'İŞ'),
(0, 'AİLE'),
(0, 'GAZİ'),
(0, 'ÇOMÜ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islem`
--

CREATE TABLE `islem` (
  `id` int(10) NOT NULL,
  `kullanici` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `islem` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `islem`
--

INSERT INTO `islem` (`id`, `kullanici`, `islem`, `tarih`) VALUES
(0, 'serhat', 'serhat adlı kullanıcı OKUL adlı gruba eklendi', '2020-06-22 00:00:07'),
(0, 'serhat', ' bir kullanıcı silindi', '2020-06-22 00:22:31'),
(0, 'serhat', ' bir kullanıcı silindi', '2020-06-22 00:22:31'),
(0, 'serhat', 'ali adlı kullanıcı İŞ adlı gruba eklendi', '2020-06-22 00:25:53'),
(0, 'serhatdemir', 'ali adlı kullanıcı OKUL adlı gruba eklendi', '2020-06-22 00:37:56'),
(0, 'serhatdemir', 'MAÇ adlı grup eklendi', '2020-06-22 00:38:13'),
(0, 'serhatdemir', ' bir kullanıcı silindi', '2020-06-22 00:38:38'),
(0, 'serhatdemir', ' bir kullanıcı silindi', '2020-06-22 00:38:38'),
(0, 'serhatdemir', 'serhat adlı kullanıcı OKUL adlı gruba eklendi', '2020-06-22 00:39:05'),
(0, 'serhatdemir', ' bir kullanıcı silindi', '2020-06-22 00:39:58'),
(0, 'serhatdemir', ' bir kullanıcı silindi', '2020-06-22 00:39:58'),
(0, 'zarok', 'serhat adlı kullanıcı OKUL adlı gruba eklendi', '2020-06-22 00:47:31'),
(0, 'zarok', 'ÇOMÜ adlı grup eklendi', '2020-06-22 00:47:46'),
(0, 'zarok', ' bir kullanıcı silindi', '2020-06-22 00:48:15'),
(0, 'zarok', ' bir kullanıcı silindi', '2020-06-22 00:48:15'),
(0, 'zarok', 'serhat adlı kullanıcı EV adlı gruba eklendi', '2020-06-22 00:49:02'),
(0, 'admin', 'ali adlı kullanıcı OKUL adlı gruba eklendi', '2020-06-22 00:55:48'),
(0, 'admin', 'İSTANBUL adlı grup eklendi', '2020-06-22 00:55:59'),
(0, 'admin', 'HOME adlı grup eklendi', '2020-06-22 00:56:10'),
(0, 'admin', 'VAN adlı grup eklendi', '2020-06-22 00:58:26'),
(0, 'admin', 'serdar adlı kullanıcı EV adlı gruba eklendi', '2020-06-22 00:58:55'),
(0, 'admin', ' bir kullanıcı silindi', '2020-06-22 00:59:20'),
(0, 'admin', ' bir kullanıcı silindi', '2020-06-22 00:59:20'),
(0, 'admin', 'GAZİ adlı grup eklendi', '2020-06-22 01:17:43'),
(0, 'admin', 'serhat adlı kullanıcı GAZİ adlı gruba eklendi', '2020-06-22 01:17:55'),
(0, 'admin', 'OKUL adlı grup silindi', '2020-06-22 01:18:43'),
(0, 'admin', 'serhat adlı grup eklendi', '2020-06-22 01:22:53'),
(0, 'admin', 'serhat adlı grup silindi', '2020-06-22 01:22:54'),
(0, 'admin', 'serhat adlı grup eklendi', '2020-06-22 01:22:56'),
(0, 'admin', 'van adlı grup eklendi', '2020-06-22 01:23:00'),
(0, 'admin', 'serhat adlı grup silindi', '2020-06-22 01:23:01'),
(0, 'serhat', 'OKUL adlı grup eklendi', '2020-06-22 01:35:47'),
(0, 'serhat', 'İŞ adlı grup eklendi', '2020-06-22 01:35:50'),
(0, 'serhat', 'AİLE adlı grup eklendi', '2020-06-22 01:35:55'),
(0, 'serhat', 'GAZİ adlı grup eklendi', '2020-06-22 01:36:10'),
(0, 'serhat', ' bir kullanıcı silindi', '2020-06-22 01:36:17'),
(0, 'serhat', ' bir kullanıcı silindi', '2020-06-22 01:36:17'),
(0, 'admin', 'ÇOMÜ adlı grup eklendi', '2020-06-22 01:38:05'),
(0, 'admin', 'serhat adlı kullanıcı ÇOMÜ adlı gruba eklendi', '2020-06-22 01:38:25'),
(0, 'admin', ' bir kullanıcı silindi', '2020-06-22 01:38:58'),
(0, 'admin', ' bir kullanıcı silindi', '2020-06-22 01:38:58'),
(0, 'admin', 'serhat adlı kullanıcı GAZİ adlı gruba eklendi', '2020-06-22 01:39:33'),
(0, 'admin', 'serhat adlı kullanıcının ismi  serhat olarak güncellendi ve verileri değiştirildi', '2020-06-22 01:39:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(50) NOT NULL,
  `kisi_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kisi_soyadi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kisi_unvani` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `numara` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `grup_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `grupun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `kisi_adi`, `kisi_soyadi`, `mail`, `kisi_unvani`, `numara`, `grup_adi`, `grupun_id`) VALUES
(0, 'serhat', 'demir', 'serhatdemir1235@gmail.com', 'öğrenci', '5455601708', 'AİLE', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullanici_adi`, `sifre`) VALUES
(0, 'serhat', '1234'),
(0, 'serhatdemir', '12345'),
(0, 'zarok', '1234'),
(0, 'admin', '1234'),
(0, 'çomü', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
