<?php
	//$curl = curl_init();
	$url = "https://api.github.com/users/".$user;
	require_once("curlInit.php");
	$userDetails = get_object_vars(json_decode(curl_exec($curl)));
?>