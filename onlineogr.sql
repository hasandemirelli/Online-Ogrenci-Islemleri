-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 31 Ara 2018, 12:35:43
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 7.1.9

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
-- Görünüm yapısı durumu `birlesik_veriler`
-- (Asıl görünüm için aşağıya bakın)
--
DROP VIEW IF EXISTS `birlesik_veriler`;
CREATE TABLE IF NOT EXISTS `birlesik_veriler` (
`id` int(9)
,`tc` bigint(11)
,`ad` varchar(50)
,`soyad` varchar(50)
,`sifre` varchar(32)
,`email` text
,`tel` varchar(13)
,`dogum` date
,`uni` text
,`fakulte` varchar(50)
,`bolum` varchar(50)
,`program` varchar(50)
,`sinif` int(1)
,`ogr_bakiye` float
,`ogr_durum` int(1)
,`kent_kartno` varchar(13)
,`kent_bakiye` float
,`kent_durum` int(1)
);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kent_kart`
--

DROP TABLE IF EXISTS `kent_kart`;
CREATE TABLE IF NOT EXISTS `kent_kart` (
  `id` bigint(11) NOT NULL,
  `kartno` varchar(13) NOT NULL,
  `bakiye` float NOT NULL,
  `durum` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kent_kart`
--

INSERT INTO `kent_kart` (`id`, `kartno`, `bakiye`, `durum`) VALUES
(33352181950, '01190-14043-3', 41.35, 1),
(60910199140, '01190-14039-1', 0.82, 1);

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
(170204013, 33352181950, 'Hasan', 'DEMİRELLİ', '39af87e6f388bd890f49804f39760085', '170204013@ogr.alanya.edu.tr', '+905376999956', '1999-07-13', 'Alanya Alaaddin Keykubat Üniversitesi', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 2),
(170204039, 60910199140, 'Ferhat', 'BOSTANCI', '4f3e835159c0b3e5d3e2f442b8bc0968', '170204039@ogr.alanya.edu.tr', '+905352450205', '1998-01-05', 'Alanya Alaaddin Keykubat Üniversitesi', 'Mühendislik Fakültesi', 'Bilgisayar Mühendisliği Bölümü', 'Bilgisayar Mühendisliği', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci_kart`
--

DROP TABLE IF EXISTS `ogrenci_kart`;
CREATE TABLE IF NOT EXISTS `ogrenci_kart` (
  `id` int(9) NOT NULL,
  `bakiye` float NOT NULL,
  `durum` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenci_kart`
--

INSERT INTO `ogrenci_kart` (`id`, `bakiye`, `durum`) VALUES
(170204013, 142.75, 1),
(170204039, 43.12, 1);

-- --------------------------------------------------------

--
-- Görünüm yapısı `birlesik_veriler`
--
DROP TABLE IF EXISTS `birlesik_veriler`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `birlesik_veriler`  AS  select `ogrenciler`.`id` AS `id`,`ogrenciler`.`tc` AS `tc`,`ogrenciler`.`ad` AS `ad`,`ogrenciler`.`soyad` AS `soyad`,`ogrenciler`.`sifre` AS `sifre`,`ogrenciler`.`email` AS `email`,`ogrenciler`.`tel` AS `tel`,`ogrenciler`.`dogum` AS `dogum`,`ogrenciler`.`uni` AS `uni`,`ogrenciler`.`fakulte` AS `fakulte`,`ogrenciler`.`bolum` AS `bolum`,`ogrenciler`.`program` AS `program`,`ogrenciler`.`sinif` AS `sinif`,`ogrenci_kart`.`bakiye` AS `ogr_bakiye`,`ogrenci_kart`.`durum` AS `ogr_durum`,`kent_kart`.`kartno` AS `kent_kartno`,`kent_kart`.`bakiye` AS `kent_bakiye`,`kent_kart`.`durum` AS `kent_durum` from ((`ogrenciler` join `ogrenci_kart` on((`ogrenci_kart`.`id` = `ogrenciler`.`id`))) join `kent_kart` on((`kent_kart`.`id` = `ogrenciler`.`tc`))) ;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kent_kart`
--
ALTER TABLE `kent_kart`
  ADD CONSTRAINT `kent_kart_fk0` FOREIGN KEY (`id`) REFERENCES `ogrenciler` (`tc`);

--
-- Tablo kısıtlamaları `ogrenci_kart`
--
ALTER TABLE `ogrenci_kart`
  ADD CONSTRAINT `ogrenci_kart_fk0` FOREIGN KEY (`id`) REFERENCES `ogrenciler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
