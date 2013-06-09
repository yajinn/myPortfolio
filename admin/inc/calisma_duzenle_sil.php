<?php echo !defined("Adminmi") ? die("Yakalandin!") : null; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".sil-btn").click(function(){
			bu = $(this);			
			$.post('<?=URL.'sistem/islem.php'?>',{islem:'calismasil', id:$(this).attr("data-id")},function(response){
				//alert(response)
				if(response="Çalışma Silindi!"){
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
		$sorgu=mysql_query("SELECT * from calismalar");
		while($calisma=mysql_fetch_assoc($sorgu)){
	?>
	<tr style="border-bottom:1px solid #CCCCCC; padding-bottom: 20px; margin: 10px 0; display: block;"> 
		
		<td>
		
			<?=$calisma['calisma_baslik']?><br/><br/>
			<img src="<?=imagePath.$calisma['calisma_img']?>" height="100" align="left" />
			<?=substr($calisma['calisma_icerik'],0,100)?> <br/>
			<?=$calisma['calisma_date']?>

		</td>
		<td width="100" valign="middle"><a href="">Düzenle</a></td>
		<td valign="middle">
			<a class="sil-btn" href="javascript:void(0)" data-id="<?=$calisma['calisma_id']?>">Sil</a></td>
	</tr>
	<?php
		}
	?>
</table>