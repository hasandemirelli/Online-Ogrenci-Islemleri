-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 02 Oca 2019, 10:38:31
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `onlineogr`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

DROP TABLE IF EXISTS `ogrenciler`;
CREATE TABLE IF NOT EXISTS `ogrenciler` (
  `id` int(9) NOT NULL,
  `tc` bigint(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `sifre` varchar(32) DEFAULT NULL,
  `email` text NOT NULL,
  `tel` varchar(13) NOT NULL,
  `dogum` date NOT NULL,
  `uni` text NOT NULL,
  `fakulte` varchar(50) NOT NULL,
  `bolum` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `sinif` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tc` (`tc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `tc`, `ad`, `soyad`, `sifre`, `email`, `tel`, `dogum`, `uni`, `fakulte`, `bolum`, `program`, `sinif`) VALUES
(160204019, 14350277098, 'İREM', 'KÖPREK', '03a921865c8ac458d4ed1de9d2ec47e2', '160204019@ogr.alanya.edu.tr', '+905349142824', '1997-11-02', 'ALANYA ALAADDIN KEYKUBAT UNIVERSITESI\r\n', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 3),
(170204013, 33352181950, 'HASAN', 'DEMİRELLİ', '39af87e6f388bd890f49804f39760085', '170204013@ogr.alanya.edu.tr', '+905376999956', '1999-07-13', 'ALANYA ALAADDİN KEYKUBAT ÜNÜVERSİTESİ', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 2),
(170204034, 23428673106, 'FERİDE', 'TUNÇ', '65f860a12386b64d3c103f1ff735bef9', '170204034@ogr.alanya.edu.tr', '+905398897348', '1998-08-25', 'ALANYA ALAADDİN KEYKUBAT ÜNÜVERSİTESİ', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 2),
(170204039, 60910199140, 'Ferhat', 'BOSTANCI', '4f3e835159c0b3e5d3e2f442b8bc0968', '170204039@ogr.alanya.edu.tr', '+905352450205', '1998-01-05', 'Alanya Alaaddin Keykubat Üniversitesi', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
