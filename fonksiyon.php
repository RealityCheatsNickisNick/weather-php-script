<?php function Baglan($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
	$cikti = curl_exec($curl);
	curl_close($curl);
	return str_replace(array('src="','href="',"\n","\t","\r"), array('src="http://www.mgm.gov.tr/tahmin/','href="http://www.mgm.gov.tr/tahmin/'," ",null,null), $cikti);
} ?>