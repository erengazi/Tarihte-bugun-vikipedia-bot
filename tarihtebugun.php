<html dir="ltr" lang="tr-TR">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarihte Bugün</title> 

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
	echo "<b>Tarihte bugün (".strtr(date("j F"), $aylar).")</b> <br>";
	$adresx = "http://www.wikizeroo.com/index.php?q=". base64_encode("http://tr.wikipedia.org/wiki/" . $Aylr);
	$kaynakx = file_get_contents($adresx);
	for ($say=0;$say<30;$say++) { 
	$veribu = '#<li>(.*?)</li>#'; 
	preg_match_all($veribu,$kaynakx,$verisb);	
	$bugunx = $verisb[1][$say]; 
	$bugunx = strip_tags($bugunx,'<table><tr><th><td><span><b><p><h2><h1><h3><i><br><ul><li><strong><dl><ol><dt><div>'); 
	echo $bugunx .		"<br>";
	}
	?>	
	
</html>
