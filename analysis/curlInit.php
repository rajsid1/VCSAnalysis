<?php
	$url=$url.''.(strpos($url, '?') !== FALSE ? '&':'?').''."client_id=bcf33a7c4ebbd84c7711&client_secret=2dfc7b12bbd55daf3d28a58f29615f2425f069c6";
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $url,
	    CURLOPT_USERAGENT => 'Awesome-VCS-App',
		CURLOPT_SSL_VERIFYPEER => false
	));
?>