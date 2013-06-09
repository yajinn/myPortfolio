<?php echo !defined("Adminmi") ? die("Yakalandin!") : null; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".sil-btn").click(function(){
			bu = $(this);			
			$.post('<?=URL.'sistem/islem.php'?>',{islem:'slidersil', id:$(this).attr("data-id")},function(response){
				//alert(response)
				if(response="Slider Silindi!"){
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
		$sorgu=mysql_query("SELECT * from slider");
		while($slider=mysql_fetch_assoc($sorgu)){
	?>
	<tr style="border-bottom:1px solid #CCCCCC; padding-bottom: 20px; margin: 10px 0; display: block;"> 
		
		<td>
			<img src="<?=assets."slider/".$slider['slider_img']?>" height="100" align="left" />
			<?=substr($slider['slider_desc'],0,100)?> <br/>
		</td>
		<td width="100" valign="middle"><a href="">Düzenle</a></td>
		<td valign="middle">
			<a class="sil-btn" href="javascript:void(0)" data-id="<?=$slider['slider_id']?>">Sil</a></td>
	</tr>
	<?php
		}
	?>
</table>