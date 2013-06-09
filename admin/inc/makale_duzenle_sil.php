<?php echo !defined("Adminmi") ? die("Yakalandin!") : null; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".sil-btn").click(function(){
			bu = $(this);			
			$.post('<?=URL.'sistem/islem.php'?>',{islem:'makalesil', id:$(this).attr("data-id")},function(response){
				//alert(response)
				if(response="Makale Silindi!"){
					bu.parent().parent().remove();
					alert(response)
				}else{
					alert(response);
				}
			});
		})
	})
</script>
<table>
	<?php
		
		extract($_GET);
		/* 
		$sorgu=mysql_query("SELECT * from makaleler");
		while($makale=mysql_fetch_assoc($sorgu)){
		*/
		
		//sayfada gösterilecek veri sayısı 
		$veri = 4; 
		
		//toplam kayıt sayısı 1.yöntem
		$sorgu = mysql_query("SELECT count(makaleler_id) as toplam from makaleler");
		$kayit = mysql_fetch_assoc($sorgu);
		$toplamKayit = $kayit['toplam'];
		
		//toplam kayıt sayısı 2.yöntem
		//$toplamKayit = mysql_num_rows(mysql_query("SELECT * from makaleler"));
		
		//limit nereden başlayacak 1.yöntem
		$basla = $sayfa ? ($sayfa -1) * $veri : 0;
		
		//limit nereden başlayacak 2.yöntem
		/*
		if($sayfa){
			$basla = ($sayfa -1) * $veri;
		}else{
			$basla = 0;
		}*/
		
		//toplamda kaç sayfa olacak ceil yukarı yuvarlama
		$sayfaToplam = ceil($toplamKayit / $veri) ;
		
		$sorgu=mysql_query("SELECT * from makaleler limit $basla,$veri");
		while($makale=mysql_fetch_assoc($sorgu)){

	?>
	<tr style="border-bottom:1px solid #CCCCCC; padding-bottom: 20px; margin: 10px 0; display: block;"> 
		<td>
			<?=$makale['makaleler_baslik']?><br/><br/>
			<?=substr($makale['makaleler_icerik'],0,100)?>
		</td>
		<td width="100" valign="middle"><a href="index.php?page=makaleduzenleislem&makale_id=<?=$makale['makaleler_id']?>">Düzenle</a></td>
		<td valign="middle">
			<a class="sil-btn" href="javascript:void(0)" data-id="<?=$makale['makaleler_id']?>">Sil</a></td>
	</tr>
	<?php
		}
	?>
</table>

<div class="clearfix number-wrapper">
	<?php
		for($i=0; $i<$sayfaToplam; $i++){
			echo '<a class="pagenumber" href="index.php?page=makaleduzenle&sayfa='.($i+1).'">'.($i+1).'</a>';
		}
	?>
	
</div>

