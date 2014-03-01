<?php
	$curl = curl_init();
	$url = "https://api.github.com/users/".$user;
	curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $url,
	CURLOPT_USERAGENT => 'Awesome-VCS-App',
	CURLOPT_SSL_VERIFYPEER => false
	));
	
	$userDetails = get_object_vars(json_decode(curl_exec($curl)));
?>