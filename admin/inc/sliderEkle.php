<form action="<?=URL.'sistem/islem.php'?>" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="islem" value="sliderekle"/>
    <div>
        <label for="slider_desc">Slider Açıklama : </label>
        <input type="text" name="slider_desc" />
    </div>
	<div>
		<input type="file" name="slider_img" />
	</div>
	<div>
		<input type="submit" value="Yükle" />
	</div>
</form>