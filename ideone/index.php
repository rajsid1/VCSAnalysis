<?php
	header("content-type:application/json");
	
	// creating soap client
	$client = new SoapClient("http://ideone.com/api/1/service.wsdl");
	// calling test function
	//$testArray = $client->testFunction("rajsid", "qazwsx");
	
	preg_match_all("/input/", $_POST['source'], $match);
	$inputArray = array(0,1,2,3,4,5,6,7,8,9);
	print_r($match);
	$input = array_rand($inputArray, count($match[0]));
	print_r($input);
	$inputStr=$input;
	$subResp = $client->createSubmission("rajsid", "qazwsx", $_POST['source'], 4, trim($inputStr), true, true);
	
	while(true)
	{
		$statResp = $client->getSubmissionStatus("rajsid", "qazwsx", $subResp['link']);
		if ($statResp['status']==0)
		{
			$result = $statResp['result'];
			$answer = $client->getSubmissionDetails("rajsid", "qazwsx", $subResp['link'], true, true, true, true, true);
			echo json_encode($answer);
			break;
		}
		sleep(1);
	}
	
	/*
	// printing returned values
	echo "<table>\n";
	echo "<tr><th>key</th><th>value</th><th>string</th><th>float</th><th>integer</th><th>bool</th></tr>\n";
	foreach($testArray as $k => $v) {
		echo "<td>" . $k . "</td><td>" . $v
			. "</td><td>" . is_string($v)
			. "</td><td>" . is_float($v)
			. "</td><td>" . is_integer($v)
			. "</td><td>" . is_bool($v)
			. "</td><td>\n";
		echo "</tr>\n";
	}
	echo "</table>\n";
	*/
?>