<?php 
	$id=$_GET['calisma'];
	$sorgu = mysql_query("SELECT * FROM calismalar where calisma_id='$id'");
	$calisma = mysql_fetch_assoc($sorgu)
?>

<div style="margin-top: 30px;">
	<div class="f20 m10-0"><?=$calisma['calisma_baslik']?></div>
	<div><img src="assets/works/<?=$calisma['calisma_img']?>" /> </div>
	<div class="f14 m10-0"><?=$calisma['calisma_icerik']?></div>	
	<div><a href="index.php">Anasayfaya Dön</a></div>
</div>