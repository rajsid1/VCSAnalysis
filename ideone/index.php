<?php
	header("content-type:application/json");
	print_r($_POST);
	
	// creating soap client
	$client = new SoapClient("http://ideone.com/api/1/service.wsdl");
	// calling test function
	//$testArray = $client->testFunction("rajsid", "qazwsx");

	$subResp = $client->createSubmission("rajsid", "qazwsx", $_POST['source'], 4, NULL, true, true);
	$resultArray = array(0 => 'not running – the submission has been created with run parameter set to false', 11 => 'compilation error   –   the   program   could   not   be executed due to compilation error', 12 => 'runtime error – the program finished because of  the runtime error, for example: division by zero, array index out of bounds, uncaught exception', 13 => "time limit exceeded – the program didn't stop before the time limit", 15 => 'success – everything went ok', 17 => 'memory limit exceeded – the program tried to use more memory than it is allowed to', 19 => 'illegal system call – the program tried to call illegal system function', 20 => 'internal   error   –   some   problem   occurred   on ideone.com; try to submit the program again and if that   fails   too,   then   please   contact   us   at contact@ideone.com');
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