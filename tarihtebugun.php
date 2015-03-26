<html dir="ltr" lang="tr-TR">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarihte Bugün</title> 
<base href="http://tr.wikipedia.org/wiki/"/>

<?php 		
	$aylar = array(
    'January'    =>    'Ocak',
    'February'    =>    'Þubat',
    'March'        =>    'Mart',
    'April'        =>    'Nisan',
    'May'        =>    'Mayýs',
    'June'        =>    'Haziran',
    'July'        =>    'Temmuz',
    'August'    =>    'Aðustos',
    'September'    =>    'Eylül',
    'October'    =>    'Ekim',
    'November'    =>    'Kasým',
    'December'    =>    'Aralýk',
    'Monday'    =>    'Pazartesi',
    'Tuesday'    =>    'Salý',
    'Wednesday'    =>    'Çarþamba',
    'Thursday'    =>    'Perþembe',
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