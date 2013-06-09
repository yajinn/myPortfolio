<form action="<?=URL.'sistem/islem.php'?>" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="islem" value="makaleekle"/>
  
	<table cellpadding="10" cellspacing="10" >  
		<tr style="margin: 10px 0">
			<td>Makale Başlık</td>
			<td>:</td>
			<td><input type="text" name="makaleler_baslik"/></td>
		</tr>
		<tr style="margin: 10px 0">
			<td style="vertical-align: top">Makale</td>
			<td style="vertical-align: top">:</td>
			<td><textarea name="makaleler_icerik" id="makaleler_icerik" cols="30" rows="10"></textarea></td>
		</tr>
		<tr style="margin: 10px 0">
			<td>
				<label for="aktif"> Aktif</label>
				<input type="radio" name="makaleler_durum" value="1" checked/>
				<label for="pasif"> Pasif</label>
				<input type="radio" name="makaleler_durum" value="0" /> 	
			</td>
			<td></td>
			<td><input type="submit" value="Kaydet" /></td>
		</tr>
	</table>

</form>