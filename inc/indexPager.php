<?php 

switch($_GET['page']){
	case "calisma_detay":
		include 'inc/calisma_detay.php';
	break;
	
	case "benkimim":
		include 'inc/benkimim.php';
	break;
	
	case "makaleler":
		include 'inc/makaleler.php';
	break;
	
	case "makale_detay":
		include 'inc/makale_detay.php';
	break;
	
	case "iletisim":
		include 'inc/iletisim.php';
	break;
	
	default:
		include 'inc/calismalar.php';
	break;	
	
}

?>