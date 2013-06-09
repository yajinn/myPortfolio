<?php
error_reporting(0);
 switch($_GET[page]){
 		
 	case 'ayarlar':
		include("inc/ayar.php");
	break;
	
 	case 'calismaekle':
		 include('inc/calismaEkle.php');
	break;
	
 	case 'calismaduzenle':
		 include('inc/calisma_duzenle_sil.php');
	break;
		
 	case 'makaleekle':
		 include('inc/makaleEkle.php');
	break;
	
 	case 'makaleduzenle':
		 include('inc/makale_duzenle_sil.php');
	break;
	
	case 'slideekle':
		 include('inc/sliderEkle.php');
	break;
	
 	case 'slideduzenle':
		 include('inc/slider_duzenle_sil.php');
	break;
		
	default: 
		 echo "Admin Sayfasına Hoşgeldiniz,";
	break;
 }					
?>