<form action="<?=URL.'sistem/islem.php'?>" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="islem" value="calismaekle"/>
    <div>
    	<label for="calisma_img">Çalışma Görseli : </label>
    	<input type="file" name="calisma_img" />
    </div>
	<div>
		
	</div>
	<div>
		<label for="calisma_baslik">Çalışma Başlık : </label>
		<input type="text" name="calisma_baslik" />
	</div>
	
	<div>
		<label for="calisma_icerik" style="vertical-align: top">Çalışma İçerik : </label>
		<textarea name="calisma_icerik" id="" cols="30" rows="10"></textarea>
	</div>
	
	<div>
		<input type="submit" value="Yükle" style="margin-left: 330px;" />
	</div>
</form>