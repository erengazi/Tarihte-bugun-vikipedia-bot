<html dir="ltr" lang="tr-TR">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarihte Bugün</title> 
<base href="http://tr.wikipedia.org/wiki/"/>

<b><a href="http://koding.com/gazi">http://koding.com/gazi</a></b><br><br>
<b><a href="Çalıştırın">http://ugkkfa849fd6.gazi.koding.io/tarihtebugun.php</a></b><br><br>


<?php 		
	$aylar = array(
    'January'    =>    'Ocak',
    'February'    =>    'Şubat',
    'March'        =>    'Mart',
    'April'        =>    'Nisan',
    'May'        =>    'Mayıs',
    'June'        =>    'Haziran',
    'July'        =>    'Temmuz',
    'August'    =>    'Ağustos',
    'September'    =>    'Eylül',
    'October'    =>    'Ekim',
    'November'    =>    'Kasım',
    'December'    =>    'Aralık',
    'Monday'    =>    'Pazartesi',
    'Tuesday'    =>    'Salı',
    'Wednesday'    =>    'Çarşamba',
    'Thursday'    =>    'Perşembe',
    'Friday'    =>    'Cuma',
    'Saturday'    =>    'Cumartesi',
    'Sunday'    =>    'Pazar',
); 
$TurkceAylar =  strtr(date("j F Y, l"), $aylar);

	$Aylr =  strtr(date("j_F"), $aylar);
	$adresx = "http://tr.wikipedia.org/wiki/" . $Aylr; 
	$kaynakx = file_get_contents($adresx);
	for ($say=0;$say<30;$say++) { 
	$veribu = '#<li>(.*?)</li>#'; 
	preg_match_all($veribu,$kaynakx,$verisb); 
	$bugunx = $verisb[1][$say]; 
	echo $bugunx .		"<br><br><br>";
	}
	?>	
			
			
</html>			