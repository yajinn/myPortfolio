<?php
	
	require_once 'baglan.php';
	extract($_REQUEST);
	switch ($islem) {
		case 'ayarkaydet':


            //upload logo işlemi
            $logom;
            $tmp_name = $_FILES["site_logo"]["tmp_name"];
            $name = $_FILES["site_logo"]["name"];
            $upload = move_uploaded_file($tmp_name,uploadPath.$name);

            if($upload){
               //echo "upload";
               $logom = $_FILES["site_logo"]["name"];
            }else{
               //echo "upload hata";
               $logom = $ayar["site_logo"];
            }

            $kaydedildi = mysql_query("UPDATE ayarlar SET site_url='$site_url',
            site_desc='$site_desc',
            site_title='$site_title',
            site_adres = '$site_adres',
            site_map='$site_map',
            site_key='$site_key',
            site_logo='$logom',
            site_admin='$site_admin',
            site_pass='$site_pass',
            link_fb='$link_fb',
            link_tw='$link_tw',
            link_in='$link_in',
            link_dvn='$link_dvn',
            link_flick='$link_flick',
            link_ins='$link_ins'");
            if($kaydedildi){
                echo "işlem başarılı";
            }else{
                echo "hata !";
            }

		break;
		
        case 'sliderekle':

            $tmp_name = $_FILES["slider_img"]["tmp_name"];
            $slider_name = $_FILES["slider_img"]["name"];
            $upload = move_uploaded_file($tmp_name,sliderUploadPath.$slider_name);

            if($upload){
                $islem =mysql_query("INSERT INTO slider(slider_desc,slider_img) values('$slider_desc','$slider_name')");
                if($islem){
                    echo "img yüklendi, kaydedildi";
                }else{
                    echo "img yüklendi, kaydedilmedi";
                }
            }else{
                echo "hata";
            }
		
        break;
		
		case 'sliderguncelle':
		
		break;
				
		case 'slidersil':
			$sil = mysql_query("DELETE from slider where slider_id='$id'");
			if($sil){
				echo "Slider Silindi!";
				
			}else{
				echo "hata";
			}
		break;
			
		case 'makaleekle':
			//istediğimiz bir değeri istediğimiz başka bir değerle değiştirmemizi sağlar
			//str_replace($search, $replace, $subject) ;
			$search ="Matrix";
			$replace ="Bu filmi çok severim";
			$subject =$makaleler_baslik;
			$makaleler_baslik= str_replace($search, $replace, $subject);
			
			//strip_tags gönderilen içerikteki html tagleri temizler
			$makaleler_baslik2=strip_tags($makaleler_baslik);
			//trim sağ ve soldan boşlukları siler
			$makaleler_icerik2=trim(strip_tags($makaleler_icerik));
						 
						
			$kaydet=mysql_query("INSERT INTO makaleler(makaleler_baslik,makaleler_icerik,makaleler_durum) values('$makaleler_baslik2','$makaleler_icerik2','$makaleler_durum')");
			
			if($kaydet){
				echo "Kaydedildi";
			}else{
				echo "hata";
			}	
		break;
		
		case 'makalesil':
			//echo $id;
			$sil = mysql_query("DELETE from makaleler where makaleler_id='$id'");
			if($sil){
				echo "Makale Silindi!";
			}else{
				echo "hata";
			}
			
		break;
		
		case 'makaleguncelle':
			$guncelle = mysql_query("UPDATE makaleler set makaleler_baslik='$makaleler_baslik', makaleler_icerik='$makaleler_icerik', makaleler_durum='$makaleler_durum' where makaleler_id='$makale_id'");		
			if($guncelle){
				echo "Makale Güncellendi";
			}else{
				echo "hata!";
			}			
		break;
		
		case 'calismasil':
			$sil = mysql_query("DELETE from calismalar where calisma_id='$id'");
			if($sil){
				echo "Çalışma Silindi!";
			}else{
				echo "hata!";
			}
			
		break;	

		case 'calismaekle':
			//echo "calismaekle";
			
			$tmp_name = $_FILES["calisma_img"]["tmp_name"];
            $calisma_img = $_FILES["calisma_img"]["name"];
            $upload = move_uploaded_file($tmp_name,imageUploadPath.$calisma_img);

            if($upload){
                $islem =mysql_query("INSERT INTO calismalar(calisma_img,calisma_baslik,calisma_icerik) values('$calisma_img','$calisma_baslik','$calisma_icerik')");
                if($islem){
                    echo "img yüklendi, kaydedildi";
                }else{
                    echo "img yüklendi, kaydedilmedi";
                }
            }else{
                echo "hata";
            }
			
		break;
				
		case 'giris':
			// girilen bilgilerdeki tırnakları etkisiz hala getirir  yani tırnakların önüne slash ekler addslashes($str); 
			// mysql komutu ögeleri siler  mysql_escape_string($unescaped_string);
			$kulad2=mysql_escape_string($kulad); 
			$sifre2 = mysql_escape_string($sifre) ;
			
			$sorgu = mysql_query("SELECT * from ayarlar where site_admin='$kulad2' and site_pass='$sifre2'");
			$kayit = mysql_fetch_assoc($sorgu);
			if($kayit){
				echo "Giriş başarılı";
				$_SESSION['yetkili']=$kayit['site_admin'];
			}else{
				echo "Kullanıcı adı yada şifre yanlış";
			}
			
		break;
		
		case 'cikis':
			session_destroy();
			header("Location:".URL);
		break;		
			
        default:

			
		break;
	}
?>