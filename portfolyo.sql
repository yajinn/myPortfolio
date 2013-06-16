-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Haz 2013, 08:16:37
-- Sunucu sürümü: 5.5.24-log
-- PHP Sürümü: 5.3.13

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `calismalar`
--

INSERT INTO `calismalar` (`calisma_id`, `calisma_img`, `calisma_date`, `calisma_baslik`, `calisma_icerik`) VALUES
(6, 'business-q-c-640-480-8.jpg', '2013-06-08 08:56:03', 'Ahmet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim libero neque, vel consectetur nisl lobortis blandit. Praesent imperdiet lacus id auctor lacinia. Suspendisse rutrum lacinia arcu, at porta sem egestas sit amet. Fusce commodo blandit cursus. Nulla facilisi. Nulla bibendum semper lorem non posuere. Duis non odio nibh. Praesent imperdiet est a diam dapibus, sed pharetra sem rhoncus. Vivamus ornare, nisi eget fringilla gravida, diam urna luctus dolor, sed facilisis leo lorem ac arcu. Aliquam hendrerit dictum posuere. Sed sit amet hendrerit arcu. Fusce elementum sit amet tortor quis adipiscing.'),
(7, 'people-q-c-640-480-6.jpg', '2013-06-08 08:56:12', 'Tatlı kız', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim libero neque, vel consectetur nisl lobortis blandit. Praesent imperdiet lacus id auctor lacinia. Suspendisse rutrum lacinia arcu, at porta sem egestas sit amet. Fusce commodo blandit cursus. Nulla facilisi. Nulla bibendum semper lorem non posuere. Duis non odio nibh. Praesent imperdiet est a diam dapibus, sed pharetra sem rhoncus. Vivamus ornare, nisi eget fringilla gravida, diam urna luctus dolor, sed facilisis leo lorem ac arcu. Aliquam hendrerit dictum posuere. Sed sit amet hendrerit arcu. Fusce elementum sit amet tortor quis adipiscing.'),
(8, 'people-q-c-640-480-7.jpg', '2013-06-08 08:56:22', 'Güzel Gözler', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim libero neque, vel consectetur nisl lobortis blandit. Praesent imperdiet lacus id auctor lacinia. Suspendisse rutrum lacinia arcu, at porta sem egestas sit amet. Fusce commodo blandit cursus. Nulla facilisi. Nulla bibendum semper lorem non posuere. Duis non odio nibh. Praesent imperdiet est a diam dapibus, sed pharetra sem rhoncus. Vivamus ornare, nisi eget fringilla gravida, diam urna luctus dolor, sed facilisis leo lorem ac arcu. Aliquam hendrerit dictum posuere. Sed sit amet hendrerit arcu. Fusce elementum sit amet tortor quis adipiscing.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`makaleler_id`, `makaleler_date`, `makaleler_baslik`, `makaleler_icerik`, `makaleler_durum`) VALUES
(2, '2013-06-09 09:06:21', 'Yazalım çizelim güncel', 'Yeniledim				Morbi pellentesque luctus sollicitudin. Suspendisse velit metus, pharetra eget fringilla ac, commodo in eros. Donec lobortis porta porta. Vestibulum vitae ligula eu mi bibendum pharetra. Aliquam erat volutpat. Donec purus arcu, suscipit sed mollis sit amet, luctus quis ligula. Cras eget semper neque. Cras quis velit mi, vel aliquet sapien. Sed id eros in est tempus congue. Curabitur enim leo, porttitor at porttitor vel, euismod ac nibh. Sed augue lectus, aliquam ac elementum sit amet, imperdiet nec quam. Nulla vehicula felis non odio porttitor non laoreet sapien rutrum. Sed bibendum dictum tempor. Duis dapibus, diam ut interdum egestas, odio est gravida sapien, a rhoncus turpis sem ut augue.						', 0),
(6, '2013-05-26 12:04:29', 'Makale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit, velit vestibulum mattis blandit, metus mi convallis arcu, non lobortis leo justo sed quam. Proin lacus nisl, molestie at adipiscing eget, condimentum eget tellus. Proin elementum luctus posuere. Nunc fermentum nulla metus. Cras tincidunt eros a purus suscipit viverra. Fusce dignissim adipiscing varius. Suspendisse consectetur, magna eget ullamcorper adipiscing, eros eros mattis quam, non eleifend ante orci vitae nisl. Cras ultricies enim et nisi semper a auctor tellus consectetur. Praesent ullamcorper feugiat tempor. Cras sed sem non purus rhoncus rutrum elementum eu arcu. Nam accumsan laoreet condimentum. Sed dui nulla, interdum ac pharetra venenatis, porttitor in nulla. Nam ac felis ut justo vestibulum eleifend. Vestibulum ut dui eu lacus pharetra molestie quis non erat. Aliquam pulvinar, leo in pharetra pellentesque, velit nisi lacinia arcu, vel faucibus nibh libero sit amet justo. Suspendisse ac ipsum mi, et fringilla metus.', 1),
(11, '2013-06-08 10:39:03', 'Makalemin kaşı kara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(12, '2013-06-08 10:39:14', 'Test Makale', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(13, '2013-06-08 10:39:26', 'Kimdir?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(14, '2013-06-08 10:39:37', 'Php Canavarı', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(15, '2013-06-08 10:39:42', 'Lipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(16, '2013-06-08 10:39:50', 'MySQL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(17, '2013-06-08 10:40:02', 'Sessiz çığlıklar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mattis magna. Vivamus ut tellus est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus mollis sagittis massa quis volutpat. Etiam molestie, neque ac faucibus auctor, tortor felis mollis turpis, non consectetur ipsum elit a magna. Suspendisse et semper nisl. Ut neque turpis, viverra egestas nunc vitae, facilisis pulvinar tellus. Maecenas et laoreet sem, ut suscipit sapien. Suspendisse bibendum auctor augue, at euismod tellus porttitor sit amet. Nullam ac mollis risus, quis rutrum quam. Sed vel interdum sapien. Donec luctus est velit, vitae auctor urna facilisis quis.', 1),
(18, '2013-06-09 09:06:56', 'Yazımı yazdım', 'Bitti', 1),
(21, '2013-06-15 10:14:25', 'XSS kontrol', '\r\nalert("aaa");\r\n', 1);

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
(3, 'slider2.jpg', 'Slider Açıklama 2'),
(4, 'slider3.jpg', 'Slider Açıklama 3'),
(5, 'slider4.jpg', 'Slider Açıklama 4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
