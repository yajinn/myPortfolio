<h1 class="content-header"> Neler Yaptım...</h1>
<ul class="works">
	<?php 
		$sorgu=mysql_query("SELECT * FROM calismalar order by calisma_id desc");
		while($calisma=mysql_fetch_assoc($sorgu)){
	?>
	
	<li>
		<a href="index.php?page=calisma_detay&calisma=<?=$calisma['calisma_id']?>" class="grid_3">
			<img src="assets/works/<?=$calisma['calisma_img']?>" width="220" height="169"/>
			<span>
				<h6 class="m10-0 f14"><?=substr($calisma['calisma_baslik'],0,20)."..." ?></h6>
				<p class="m10-0 f12"><?=substr($calisma['calisma_icerik'],0,60)."..."?></p>
			</span>
		</a>
	</li>
	
	<?php
		}
	?>
</ul>