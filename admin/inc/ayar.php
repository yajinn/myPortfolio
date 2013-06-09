<?php echo !defined("Adminmi") ? die("Yakalandın gardas ") :null;  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ayar Sayfası</title>

</head>
<body>
	<form action="<?=URL.'sistem/islem.php'?>" method="post" class="form" enctype="multipart/form-data" >
	 <input type="hidden" name="islem" value="ayarkaydet" />
	 <table class="ayarlartablo" cellpadding="3" cellspacing="5">
	 	<tr>
	 		<td>Site URL</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_url" value="<?= $ayar["site_url"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td>Site Açıklama</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_desc" value="<?= $ayar["site_desc"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td>Site Başlık</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_title" value="<?= $ayar["site_title"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td>Site Adres Bilgileri</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_adres" value="<?= $ayar["site_adres"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td>Konum</td>
	 		<td>:</td>
	 		<td><input type="text" id="geocomplete" name="site_map" value="<?= $ayar["site_map"]?>"/>
	 			
	 			<div class="map_canvas"></div>
	 			<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
	 			<script type="text/javascript" src="<?=assets?>js/jquery.geocomplete.min.js"></script>
				<script type="text/javascript" src="<?=assets?>js/logger.js"></script>
				<script>
			      $(function(){
			        var options = {
			          map: ".map_canvas",
			          location: "<?=$ayar["site_map"]?>"
			        };
			        
			        $("#geocomplete").geocomplete(options);
			        
			      });
			    </script>	 			
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>Anahtar Kelimeler</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_key" value="<?= $ayar["site_key"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td>Logo</td>
	 		<td>:</td>
	 		<td><img src="<?=assets."img/".$ayar["site_logo"] ?>" height="40" class="logo_img"><br />
	 			<input type="file" name="site_logo" id="site_logo" /></td>
	 	</tr>
	 	<tr>
	 		<td>Admin</td>
	 		<td>:</td>
	 		<td><input type="text" name="site_admin" value="<?= $ayar["site_admin"]?>"/></td>
	 	</tr>
	 	<tr>
	 		<td>Şifre</td>	
	 		<td>:</td>
	 		<td><input type="password" name="site_pass" value="<?= $ayar["site_pass"]?>"/></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/facebook.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_fb" value="<?= $ayar["link_fb"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/twitter.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_tw" value="<?= $ayar["link_tw"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/linkedin.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_in" value="<?= $ayar["link_in"]?>" /></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/deviantart.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_dvn" value="<?= $ayar["link_dvn"]?>"/></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/flickr.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_flick" value="<?= $ayar["link_flick"]?>"/></td>
	 	</tr>
	 	<tr>
	 		<td><img src="../Assets/img/icons/instagram.png" /></td>
	 		<td>:</td>
	 		<td><input type="text" name="link_ins" value="<?= $ayar["link_ins"]?>"/></td>
	 	</tr>
	 	<tr>
	 		<td></td>
	 		<td></td>
	 		<td><input type="submit" value="Kaydet" class="btn-kaydet" /></td>
	 	</tr>
	 </table>
	 </form>
</body>
</html>