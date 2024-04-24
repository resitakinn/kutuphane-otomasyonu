-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Nis 2022, 15:51:29
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicigiris`
--

CREATE TABLE `kullanicigiris` (
  `giris_id` int(11) NOT NULL,
  `kullanici_isim` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicigiris`
--

INSERT INTO `kullanicigiris` (`giris_id`, `kullanici_isim`, `kullanici_mail`, `kullanici_sifre`) VALUES
(1, 'Patnos Meslek YüksekOkulu', 'patnoskutuphane@resitakin.com', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `ogrenci_kitap` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ogrenci_ad` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ogrenci_no` int(9) NOT NULL,
  `ogrenci_bolum` varchar(45) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ogrenci_sinif` varchar(55) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ogrenci_aldigi_tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `ogrenci_kitap`, `ogrenci_ad`, `ogrenci_no`, `ogrenci_bolum`, `ogrenci_sinif`, `ogrenci_aldigi_tarih`) VALUES
(49, 'suç ve ceza', 'Mehmet Reşit Akın', 201231232, 'Biyomedikal Cihaz Teknolojisi', '1 Sınıf', '2022-04-03 16:29:49'),
(50, 'İnsan Ne ile Yaşar', 'Çeçan Gönül', 232322342, 'Bilgisayar Programcılığı', '1 Sınıf', '2022-04-03 16:30:17'),
(51, 'suç ve ceza', 'Mehmet Reşit Akın', 23232, 'Bilgisayar Programcılığı', '2 Sınıf', '2022-04-03 16:31:28'),
(52, 'Bin Muhteşem Güneş', 'İbrahim Damar', 200130037, 'Bilgisayar Programcılığı', '2 Sınıf', '2022-04-03 16:33:08');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicigiris`
--
ALTER TABLE `kullanicigiris`
  ADD PRIMARY KEY (`giris_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicigiris`
--
ALTER TABLE `kullanicigiris`
  MODIFY `giris_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
