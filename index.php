<?php 
	require_once 'sistem/baglan.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="keywords" content="<?=$ayar["site_key"]; ?>" />
	<meta name="description" content="<?=$ayar["site_desc"]; ?>" />
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="assets/js/site.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
        	$('#slider').nivoSlider();
    	});
	</script>
	
	<link rel="stylesheet" href="assets/css/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/css/grid.css" />
	<link rel="stylesheet" href="assets/css/fonts.css" />
	<link rel="stylesheet" href="assets/css/site.css" />
	<link rel="stylesheet" href="assets/css/myFramework.css" />
	<link rel="stylesheet" href="assets/css/nivo-slider.css" />
	<link rel="stylesheet" href="assets/css/slider/default/default.css" />
	<title><?= $ayar["site_title"]; ?></title>
</head>
<body>
	<div class="header">
		<div class="container_12 clearfix" style="padding: 30px 0;">
			<div style="width: 250px;" class="fl">
				<a href="#"> <img src="<?=assets.'img/'.$ayar["site_logo"]?>" title="<?= $ayar["site_url"]?>" /></a>
			</div>
			<div class="menubar clearfix">
				<ul class="r5 clearfix ffduru">
					<li><a href="#" class="c4">Anasayfa</a></li>
					<li><a href="#" class="c4">Ben Kimim</a></li>
					<li><a href="index.php?page=makaleler" class="c4">Makaleler</a></li>
					<li><a href="#" class="c4">Bana Ulaşın</a></li>
				</ul>
			</div>
		</div>
	<?php 
		$yazi = "Her şey Php için";
		//strlen karakter sayısını verir
		//echo strlen($yazi);
		
		//kelimeleri bölerken türkçe karakterlerde sorun çıkarmaz
		//echo mb_substr($yazi, 0,14,'UTF-8')
		
		//explode verilen değeri istediğimiz ahahtara göre parçalar ve sonuç olarak bize dizi döndürür.
		//$mevyeler ="elma,armut,kel mahmut,kavun "; 
		//$dilimlendi = explode(",",$mevyeler);
		
	?>
	<!--Slider-->
	
		<div class="slider-wrapper theme-default">
	        <div id="slider" class="nivoSlider r5">
	        	<?php 
	        		$sliders=mysql_query("SELECT * from slider order by slider_id desc limit 0,4");
					
					while($slider=mysql_fetch_assoc($sliders)){					
	        	?>
	        		<img src="assets/slider/<?=$slider['slider_img']?>" />
	        			        	
	        	<?php 
					}
	        	?>
	        	<!--
	           <img src="assets/slider/nemo.jpg" />
	           <img src="assets/slider/toystory.jpg" />
	           <img src="assets/slider/up.jpg" />
	           <img src="assets/slider/walle.jpg" />
	          	-->
	        </div>
	        <div id="htmlcaption" class="nivo-html-caption">
	            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
	        </div>
	    </div>
    </div>
	
	<!--/Slider-->

	<div class="content container_12 clearfix">
		<?php 
			include 'inc/indexPager.php';
		?>
	
	</div>
	
	
	<div class="footer">
		<div class="container_12 clearfix">
			<div class="tweet grid_6 f13 c1 r5 clearfix">
				<div class="f14 mb5 clearfix">
					<div id="tadsoyad" class="fl"></div>
					<span class="fr">Son Tweetlerim</span>			
				</div>
				<div class="tfoto">
					<img srcr="" id="tfoto" />					
				</div>
				<div id="tmesaj" class="fl f12"></div>	
			</div>
			<div class="contact grid_3 f13 c1 r5">
				<h2>Bana Ulaşın <br/> </h2>
				<p>
					<?= $ayar["site_adres"]?>
				</p>
			</div>
			<div class="social fl">

				<ul>
					<?php if(!empty($ayar["link_fb"])){ ?>
					<li><a href='http://www.facebook.com/<?=$ayar["link_fb"]?>' target="_blank">
						<img src="assets/img/icons/facebook.png"/>
						</a>
					</li>	
					<?php } ?>
					<?php if(!empty($ayar["link_tw"])){ ?>
					<li><a href='http://www.twitter.com/<?=$ayar["link_tw"]?>' target="_blank">
						<img src="assets/img/icons/twitter.png"/>
						</a>
					</li>	
					<?php } ?>
					<?php if(!empty($ayar["link_in"])){ ?>
					<li><a href='http://www.linkedin.com/pub/<?=$ayar["link_in"]?>' target="_blank">
						<img src="assets/img/icons/linkedin.png"/>
						</a>
					</li>	
					<?php } ?>
					<?php if(!empty($ayar["link_dvn"])){ ?>
					<li><a href='http://<?=$ayar["link_dvn"]?>.deviantart.com' target="_blank">
						<img src="assets/img/icons/deviantart.png"/>
						</a>
					</li>	
					<?php } ?>
					<?php if(!empty($ayar["link_flick"])){ ?>
					<li><a href='http://www.flicr.com/<?=$ayar["link_flick"]?>' target="_blank">
						<img src="assets/img/icons/flickr.png"/>
						</a>
					</li>	
					<?php } ?>
					<?php if(!empty($ayar["link_ins"])){ ?>
					<li><a href='http://instagram.com/<?=$ayar["link_ins"]?>' target="_blank">
						<img src="assets/img/icons/instagram.png"/>
						</a>
					</li>	
					<?php } ?>		
					
					
					
				</ul>
			</div>
			
		</div>
	</div>
	<!--<a class="fancybox" href="#mesaj" title="Lorem ipsum dolor sit amet">Inline</a>
	
	<div id="mesaj" style="width:400px;display: none;">
		<h3>Etiam quis mi eu elit</h3>
		<p>
			Haşmet abi geldi mi paşa.	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>
	</div>-->
</body>
</html>
