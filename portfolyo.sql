-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 May 2013, 12:15:29
-- Sunucu sürümü: 5.5.24-log
-- PHP Sürümü: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `portfolyo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_url` varchar(255) DEFAULT NULL,
  `site_desc` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_adres` varchar(255) DEFAULT NULL,
  `site_map` varchar(255) DEFAULT NULL,
  `site_key` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_admin` varchar(150) DEFAULT NULL,
  `site_pass` varchar(150) DEFAULT NULL,
  `link_fb` varchar(150) DEFAULT NULL,
  `link_tw` varchar(150) DEFAULT NULL,
  `link_in` varchar(150) DEFAULT NULL,
  `link_dvn` varchar(150) DEFAULT NULL,
  `link_flick` varchar(150) DEFAULT NULL,
  `link_ins` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_url`, `site_desc`, `site_title`, `site_adres`, `site_map`, `site_key`, `site_logo`, `site_admin`, `site_pass`, `link_fb`, `link_tw`, `link_in`, `link_dvn`, `link_flick`, `link_ins`) VALUES
('http://localhost/portfolyo/', 'Kişisel portfolyo sitem', 'Yasin coşkun -  Çalışmalarım', 'Tel : 0555 5644565 <br/>Email : info@yasin.com <br/>Adres : İstanbul Cad. No:26 Bakırköy İstanbul ', 'İstanbul, Türkiye', 'Php yazılım, Portfolyo yazılımı, çalışmalarım', 'logo.png', 'admin', '123', 'yasin.coskun873', 'Yajinn', 'yasin-coşkun/32/315/285', 'yajinn', '', 'yajinn');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calismalar`
--

CREATE TABLE IF NOT EXISTS `calismalar` (
  `calisma_id` int(11) NOT NULL AUTO_INCREMENT,
  `calisma_img` varchar(255) DEFAULT NULL,
  `calisma_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `calisma_baslik` varchar(255) DEFAULT NULL,
  `calisma_icerik` text,
  PRIMARY KEY (`calisma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `calismalar`
--

INSERT INTO `calismalar` (`calisma_id`, `calisma_img`, `calisma_date`, `calisma_baslik`, `calisma_icerik`) VALUES
(1, 'IMG_1928.JPG', '2013-05-25 07:51:14', 'Sed convallis nisi a arcu ultrices nec rutrum urna condimentum', 'Sed convallis nisi a arcu ultrices nec rutrum urna condimentum. Nullam scelerisque nisi eu ante elementum posuere. Morbi vulputate, arcu non consectetur fringilla, lectus ligula vestibulum sapien, a eleifend felis risus id sem. Proin semper sodales aliquam. Phasellus vestibulum tincidunt magna, at auctor metus adipiscing in. Etiam sit amet sagittis sapien. Curabitur a dui nulla. Donec ornare est at nisl porttitor rutrum. Suspendisse molestie lobortis felis a commodo. Donec mauris massa, porta eu venenatis eget, fringilla nec mi. Vivamus semper elit vel lacus lacinia vitae fringilla enim pellentesque.'),
(3, '733748_561219037231593_230036931_n.jpg', '2013-05-25 07:50:47', 'Tahtadan Kamyon  Yurdum insanı kendine iş arıyor', 'Yurdum insanı kendine iş arıyor ve sonuçLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tellus sit amet lorem condimentum bibendum. Integer laoreet tincidunt neque, nec volutpat enim accumsan vel. Pellentesque mattis ligula eu tellus semper fermentum nec vehicula sem. Curabitur ornare ante a orci congue adipiscing. Donec eget diam tortor, vel egestas turpis. Sed neque sapien, molestie id scelerisque et, dapibus sed purus. Donec dictum tincidunt ipsum id auctor. Fusce a lorem tortor. Etiam posuere nunc sit amet risus tincidunt ultricies. Nulla facilisi.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE IF NOT EXISTS `makaleler` (
  `makaleler_id` int(11) NOT NULL AUTO_INCREMENT,
  `makaleler_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `makaleler_baslik` varchar(255) DEFAULT NULL,
  `makaleler_icerik` text,
  `makaleler_durum` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`makaleler_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`makaleler_id`, `makaleler_date`, `makaleler_baslik`, `makaleler_icerik`, `makaleler_durum`) VALUES
(2, '2013-05-26 07:58:30', 'Yazalım çizelim', 'Morbi pellentesque luctus sollicitudin. Suspendisse velit metus, pharetra eget fringilla ac, commodo in eros. Donec lobortis porta porta. Vestibulum vitae ligula eu mi bibendum pharetra. Aliquam erat volutpat. Donec purus arcu, suscipit sed mollis sit amet, luctus quis ligula. Cras eget semper neque. Cras quis velit mi, vel aliquet sapien. Sed id eros in est tempus congue. Curabitur enim leo, porttitor at porttitor vel, euismod ac nibh. Sed augue lectus, aliquam ac elementum sit amet, imperdiet nec quam. Nulla vehicula felis non odio porttitor non laoreet sapien rutrum. Sed bibendum dictum tempor. Duis dapibus, diam ut interdum egestas, odio est gravida sapien, a rhoncus turpis sem ut augue.', 1),
(6, '2013-05-26 12:04:29', 'Makale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit, velit vestibulum mattis blandit, metus mi convallis arcu, non lobortis leo justo sed quam. Proin lacus nisl, molestie at adipiscing eget, condimentum eget tellus. Proin elementum luctus posuere. Nunc fermentum nulla metus. Cras tincidunt eros a purus suscipit viverra. Fusce dignissim adipiscing varius. Suspendisse consectetur, magna eget ullamcorper adipiscing, eros eros mattis quam, non eleifend ante orci vitae nisl. Cras ultricies enim et nisi semper a auctor tellus consectetur. Praesent ullamcorper feugiat tempor. Cras sed sem non purus rhoncus rutrum elementum eu arcu. Nam accumsan laoreet condimentum. Sed dui nulla, interdum ac pharetra venenatis, porttitor in nulla. Nam ac felis ut justo vestibulum eleifend. Vestibulum ut dui eu lacus pharetra molestie quis non erat. Aliquam pulvinar, leo in pharetra pellentesque, velit nisi lacinia arcu, vel faucibus nibh libero sit amet justo. Suspendisse ac ipsum mi, et fringilla metus.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(255) DEFAULT NULL,
  `slider_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_desc`) VALUES
(1, '733748_561219037231593_230036931_n.jpg', 'Test amaçlı'),
(2, 'slider1.png', 'Slider Açıklama 1'),
(3, 'slider2.jpg', 'Slider Açıklama 2'),
(4, 'slider3.jpg', 'Slider Açıklama 3'),
(5, 'slider4.jpg', 'Slider Açıklama 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
