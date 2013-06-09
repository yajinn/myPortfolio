<?php 
	define("Adminmi",true);
	require_once '../sistem/baglan.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="css/admin.css" />
	<link rel="stylesheet" href="css/grid.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.form.js"></script>
    <script type="text/javascript">
        $(".form").ajaxForm(function(cevap){
            alert(cevap) 
        });
        
       $(document).ready(function(){
       		$("#giris-btn").click(function(){
       			
       			$.post('<?=URL.'sistem/islem.php'?>',{islem:'giris', kulad:$("#kulad").val(), sifre: $("#sifre").val()},function(response){
					alert(response);
				});
       		})

       });
    </script>
</head>
<body>
	
	<!--
	<div class="panel clearfix">
		<div class="top f18"><h1 style="margin: 40px 20px">Portfolyo Admin Paneli</h1></div>
		<div class="menu">
			<ul>
				<li><a href="#" class="menu-header">Ayarlar</a></li>
				<li><a href="index.php?page=ayarlar" >Ayarları Değiştir</a></li>
				<li><a href="#" class="menu-header">Çalışmalar</a></li>
				<li><a href="index.php?page=calismaekle">Çalışma Ekle</a></li>
				<li><a href="index.php?page=calismaduzenle">Çalışma Düzenle /Sil</a></li>
				<li><a href="#" class="menu-header">Makaleler</a></li>
				<li><a href="index.php?page=makaleekle">Makale Ekle</a></li>
				<li><a href="index.php?page=makaleduzenle">Makale Düzenle /Sil</a></li>
				<li><a href="#" class="menu-header">Slider</a></li>
				<li><a href="index.php?page=slideekle">Slide Ekle</a></li>
				<li><a href="index.php?page=slideduzenle">Slide Düzenle /Sil</a></li>
			</ul>
		</div>
		<div class="content">
			<?php require "inc/pager.php"; ?>
		</div>
	</div>
	-->
	
	<div>
		<table width="300" cellpadding="10" cellspacing="10" style="margin: 50px auto;" >
			<tr>
				<td colspan="3"> Admin Paneli:</td>
			</tr>
			<tr>
				<td> Kullanıcı Adı</td>
				<td>:</td>
				<td><input type="text" style="width: 120px;" id="kulad"/></td>
			</tr>
			<tr>
				<td>Şifre</td>
				<td>:</td>
				<td><input type="password" style="width: 120px;" id="sifre"/></td>
			</tr>
			<tr>
				<td colspan="3"> 
					<div style="margin-top: 20px;" class="clearfix">
						<a href="javascript:void(0)" id="giris-btn" class="btn-kaydet fr db"> Giriş</a>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>




