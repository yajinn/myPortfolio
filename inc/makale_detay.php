<?php
	$id=$_GET['makale'];
	$sorgu = mysql_query("SELECT * from makaleler where makaleler_id='$id'");
	$makale = mysql_fetch_assoc($sorgu);
	
?>

<div class="m10-0 f18">
	<?=$makale['makaleler_baslik']?>
</div>
<div class="m10-0">
	<?=$makale['makaleler_icerik']?>
</div>
<div class="m10-0">
	<?=$makale['makaleler_date']?>
</div>

<div style="margin-top:20px;font-weight: bold;" class="f14"> Son 4 makale </div>

<ul>
	<?php
		$sorgu = mysql_query("SELECT * from makaleler order by makaleler_id desc limit 0,4");
		while($makale=mysql_fetch_assoc($sorgu)){
	?>
	<li class="m10-0"> 
		<a href="index.php?page=makale_detay&makale=<?=$makale['makaleler_id']?>"><?=$makale['makaleler_baslik']?></a>
	</li>
	<?php 
		}
	?>
	
</ul>

<div class="m10-0">
	<a href="index.php?page=makaleler" class="c3">Diğer Makaleler</a>
</div>
