<?php echo !defined("portfolyom") ? die("Yakalandin!") : null; ?>
<?php //var_dump($ayar) ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>ayarlar</title>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#ayarlarForm").ajaxForm(function(cevap){
					alert(cevap);
				})
			})
		</script>
	</head>

	<body>
		<form action="<?=URL.'sistem/islem.php'?>" method="post" id="ayarlarForm">
			<input type="hidden" name="islem" value="ayarkaydet" />
			
			<table class="ayarlartablo" style="width:600px">
				<tr>
					<td style="width:150px">Site URL</td>
					<td>:</td>
					<td><input type="text" name="site_url" value="<?=$ayar["site_url"]?>"/></td>
				</tr>
				<tr>
					<td>Site Açıklama</td>
					<td>:</td>
					<td><input type="text" name="site_desc" value="<?=$ayar["site_desc"]?>" /></td>
				</tr>
				<tr>
					<td>Site Başlık</td>
					<td>:</td>
					<td><input type="text" name="site_title" value="<?=$ayar["site_title"]?>" /></td>
				</tr>
				<tr>
					<td>Adres Bilgileri</td>
					<td>:</td>
					<td><input type="text" name="site_adres" value="<?=$ayar["site_adres"]?>" /></td>
				</tr>
				<tr>
					<td>Konum</td>
					<td>:</td>
					<td>
						<input type="text" id="geocomplete" name="site_map" value="<?=$ayar["site_map"]?>"/>
						
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
					<td><input type="text" name="site_key" value="<?=$ayar["site_key"]?>"/></td>
				</tr>
				
				<tr>
					<td>Site Logo</td>
					<td>:</td>
					<td>
						
						<img src="<?=assets?>img/logo.png" height="40"/> <br/>
						
						<input type="file" name="site_logo" />
					</td>
					
				</tr>
				<tr>
					<td>Admin</td>
					<td>:</td>
					<td><input type="text" name="site_admin" value="<?=$ayar["site_admin"]?>" /></td>
				</tr>
				
				<tr>
					<td>Admin Password</td>
					<td>:</td>
					<td><input type="password" name="site_pass" value="<?=$ayar["site_pass"]?>" /></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom"><img src="../assets/img/icons/facebook.png" style="margin-bottom: -12px !important;"/></td>
					<td>:</td>
					<td><input type="text" name="link_fb" value="<?=$ayar["link_fb"]?>" /></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom"><img src="../assets/img/icons/twitter.png"  style="margin-bottom: -12px;"/></td>
					<td>:</td>
					<td><input type="text" name="link_tw" value="<?=$ayar["link_tw"]?>" /></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom" ><img src="../assets/img/icons/linkedin.png" style="margin-bottom: -12px;"/></td>
					<td>:</td>
					<td><input type="text" name="link_in" value="<?=$ayar["link_in"]?>" /></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom" ><img src="../assets/img/icons/deviantart.png" style="margin-bottom: -12px;"/></td>
					<td>:</td>
					<td><input type="text" name="link_dvn"  value="<?=$ayar["link_dvn"]?>"/></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom" ><img src="../assets/img/icons/flickr.png" style="margin-bottom: -12px;"/></td>
					<td>:</td>
					<td><input type="text" name="link_flick" value="<?=$ayar["link_flick"]?>" /></td>
				</tr>
				
				<tr>
					<td align="right" valign="bottom" ><img src="../assets/img/icons/instagram.png" style="margin-bottom: -12px;"/></td>
					<td>:</td>
					<td><input type="text" name="link_ins" value="<?=$ayar["link_ins"]?>"/></td>
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
