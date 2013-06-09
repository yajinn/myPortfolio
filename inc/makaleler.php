<h1 class="content-header"> Makaleler</h1>
<ul class="works">
	<?php 
		$sorgu=mysql_query("SELECT * FROM makaleler where makaleler_durum='1' order by makaleler_id desc");
		while($makale=mysql_fetch_assoc($sorgu)){
	?>
	
	<li>
		<a href="index.php?page=makale_detay&makale=<?=$makale['makaleler_id']?>" class="grid_3">
			<span>
				<h6 class="m10-0 f14"><?=substr($makale['makaleler_baslik'],0,30)."..." ?></h6>
				<p class="m10-0 f12"><?=substr($makale['makaleler_icerik'],0,150)."..."?></p>
				<p class="m10-0 f10"><?=$makale['makaleler_date']?></p>
			</span>
		</a>
	</li>
	
	<?php
		}
	?>
</ul>