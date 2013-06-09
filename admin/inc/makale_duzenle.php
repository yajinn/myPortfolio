<?php 
	extract($_REQUEST);
	//echo $makale_id;
	$sorgu = mysql_query("SELECT * from makaleler where makaleler_id='$makale_id'");
	$makale = mysql_fetch_assoc($sorgu);
	//var_dump($makale);
?>
<form action="<?=URL.'sistem/islem.php'?>" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="islem" value="makaleguncelle"/>
    <input type="hidden" name="makale_id" value="<?=$makale_id?>"/>
  
	<table cellpadding="10" cellspacing="10">  
		<tr style="margin: 10px 0">
			<td>Makale Başlık</td>
			<td>:</td>
			<td><input type="text" name="makaleler_baslik" value="<?=$makale['makaleler_baslik']?>"/></td>
		</tr>
		<tr style="margin: 10px 0">
			<td style="vertical-align: top">Makale</td>
			<td style="vertical-align: top">:</td>
			<td><textarea name="makaleler_icerik" id="makaleler_icerik" cols="30" rows="10">
				<?=$makale['makaleler_icerik']?>
			</textarea></td>
		</tr>
		<tr style="margin: 10px 0">
			<td>
				<?php 
					if($makale['makaleler_durum']==1){
				?>
					<label for="aktif"> Aktif</label>
					<input type="radio" name="makaleler_durum" value="1" checked/>
					<label for="pasif"> Pasif</label>
					<input type="radio" name="makaleler_durum" value="0" /> 
				<?php 
					}else{
				?>
					<label for="aktif"> Aktif</label>
					<input type="radio" name="makaleler_durum" value="1" />
					<label for="pasif"> Pasif</label>
					<input type="radio" name="makaleler_durum" value="0" checked/> 
				<?php 
					}
				?>	
			</td>
			<td></td>
			<td><input type="submit" value="Güncelle" /></td>
		</tr>
	</table>

</form>