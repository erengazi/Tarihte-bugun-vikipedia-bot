<html dir="ltr" lang="tr-TR">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarihte Bug�n</title> 
<base href="http://tr.wikipedia.org/wiki/"/>

<?php 		
	$aylar = array(
    'January'    =>    'Ocak',
    'February'    =>    '�ubat',
    'March'        =>    'Mart',
    'April'        =>    'Nisan',
    'May'        =>    'May�s',
    'June'        =>    'Haziran',
    'July'        =>    'Temmuz',
    'August'    =>    'A�ustos',
    'September'    =>    'Eyl�l',
    'October'    =>    'Ekim',
    'November'    =>    'Kas�m',
    'December'    =>    'Aral�k',
    'Monday'    =>    'Pazartesi',
    'Tuesday'    =>    'Sal�',
    'Wednesday'    =>    '�ar�amba',
    'Thursday'    =>    'Per�embe',
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