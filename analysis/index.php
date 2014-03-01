<?php
	$user = isset($_GET['user']) ? $_GET['user'] : 'rajsid1';
	echo $user."<br><br>";
	
	require_once("userDetails.php");
	
	$curl = curl_init();
	$url = "https://api.github.com/users/".$user."/repos?type=all&sort=pushed";
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $url,
	    CURLOPT_USERAGENT => 'Awesome-VCS-App',
		CURLOPT_SSL_VERIFYPEER => false
	));

	echo "cURL : ".$url."<br>";
	$resp = json_decode(curl_exec($curl));

	foreach ($resp as $key => $value) 
	{
		echo $key." : ".$value->name.", owner : ".$value->owner->login."<br>";
	    $repos[$key]=array("name"=>$value->name,"owner"=>$value->owner->login);
	}

	foreach ($repos as $key => $value) 
	{
		$curl = curl_init();
		$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/commits?author=".$user;
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url,
		    CURLOPT_USERAGENT => 'Awesome-VCS-App',
			CURLOPT_SSL_VERIFYPEER => false
		));
		echo "cURL : ".$url."<br>";
		$resp = json_decode(curl_exec($curl));

		
		foreach ($resp as $key => $value) 
		{
			var_dump($key);
			print_r($value->commit->tree->sha);
		    $commitURLs[$key]=$value->commit->tree->sha;
		}
		echo "<br><br>";
	}
	
	curl_close($curl);
?>