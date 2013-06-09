<?php
	//bağlantı değişkenleri
	$host="localhost";
	$user="root";
	$pass="";
	$db="portfolyo";
		
		// Server bağlantısı
		$baglan=mysql_connect($host,$user,$pass) or die(mysql_error());
		//database seçelim
		mysql_select_db($db,$baglan) or  die(mysql_error());
		//türkçe karakter sorunu 
		mysql_query("SET CHARACTER SET 'utf8'");
		mysql_query("SET NAMES 'utf8'");
		
		//genel ayarlar 
		$sorgu =mysql_query("select * from ayarlar");
		$ayar=mysql_fetch_assoc($sorgu);
		
		//sabitler
		define("URL",$ayar["site_url"]);
		define("assets",$ayar["site_url"]."assets/");
		define("imagePath",$ayar["site_url"]."assets/works/");
		define("uploadPath","C:\\wamp\\www\\portfolyo\\assets\\img\\");
		define("sliderUploadPath","C:\\wamp\\www\\portfolyo\\assets\\slider\\");
		define("imageUploadPath","C:\\wamp\\www\\portfolyo\\assets\\works\\");

?>