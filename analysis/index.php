<?php
	/*require_once("authenticate.php");
	echo "<pre>";
	print_r(curl_exec($curl));
	echo "</pre>";
*/
	$user = isset($_GET['user']) ? $_GET['user'] : 'rajsid1';
	echo $user."<br><br>";
	require_once("constants.php");
	require_once("userDetails.php");
	
	$url = "https://api.github.com/users/".$user."/repos?type=all&sort=pushed";
	require("curlInit.php");

	echo "cURL : ".$url."<br>";
	$reposDetails = json_decode(curl_exec($curl));
	
	$codeDetails = array();
	/*
	foreach ($reposDetails as $key => $value) 
	{
		echo $key." : ".$value->name.", owner : ".$value->owner->login."<br>";
	    $repos[$key]=array("name"=>$value->name,"owner"=>$value->owner->login);
	}
	*/
	
	$repos[0]=array("name"=>"VCSCode", "owner"=>"rajsid1");
	$repos[1]=array("name"=>"VCSCode1", "owner"=>"rajsid1");
	
	foreach ($repos as $key => $value) 
	{
		$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/commits?author=".$user;
		require("curlInit.php");
		
		echo "cURL : ".$url."<br>";
		$userCommits = json_decode(curl_exec($curl));

		
		foreach ($userCommits as $key1 => $value1) 
		{
			$oldFiles = array();
			$newFiles = array();
			
			var_dump($key1);
			print_r($value1->commit->tree->sha);
		    $commitSHAs[$key1]=$value1->commit->tree->sha;
			$value11 = get_object_vars($value1);
			//print_r($value11);
			$parentSHAs[$key1]=$value11['parents'];
			print_r($value);
			$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/git/trees/".$commitSHAs[$key1];
			require("curlInit.php");
			
			echo "cURL : ".$url."<br>";
			$commitDetails = json_decode(curl_exec($curl));
			//print_r($commitDetails);
			$commitTree = $commitDetails->tree;
			foreach ($commitTree as $key2 => $value2) 
			{
				$blobSHAs[$key2] = $value2->sha;
				//print_r($commitDetails);
				$fileName = $value2->path;
				
				$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/git/blobs/".$blobSHAs[$key2];
				require("curlInit.php");
				
				echo "cURL : ".$url."<br>";
				$blobDetails = json_decode(curl_exec($curl));
				//print_r($blobDetails);
				
				$blobContent = $blobDetails->content;
				$blobEncoding = $blobDetails->encoding;
				
				echo "<b>ENCODING : </b>".$blobEncoding;
				$newFiles[$fileName] = ($blobEncoding=="base64")?base64_decode($blobContent):utf8_decode($blobContent);
				
				echo "<br><br>";
			}
			
			foreach($parentSHAs[$key1] as $key2 => $value2)
			{
				//print_r($value2);
				$parentsCommitSHAs[$key2]=$value2->sha;
				$value22 = get_object_vars($value2);
				
				$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/commits?sha=".$parentsCommitSHAs[$key2];
				require("curlInit.php");
				
				echo "cURL : ".$url."<br>";
				$parentsCommitDetails = json_decode(curl_exec($curl));
				print_r($parentsCommitDetails);
				$parentsCommitTreeSHA[$key2] = $parentsCommitDetails[0]->commit->tree->sha;
				//print_r($parentsCommitTreeSHA[$key2]);
				$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/git/trees/".$parentsCommitTreeSHA[$key2];
				require("curlInit.php");
				
				echo "cURL : ".$url."<br>";
				$parentsBlobs = json_decode(curl_exec($curl))->tree;
				
				foreach ($parentsBlobs as $key3 => $value3)
				{
					$parentsBlobSHAs[$key3] = $value3->sha;
					$fileName = $value3->path;
					
					$url = "https://api.github.com/repos/".$value['owner']."/".$value['name']."/git/blobs/".$parentsBlobSHAs[$key3];
					require("curlInit.php");
					
					echo "cURL : ".$url."<br>";
					$parentsBlobDetails = json_decode(curl_exec($curl));
					//print_r($blobDetails);
					
					$parentsBlobContent = $parentsBlobDetails->content;
					$parentsBlobEncoding = $parentsBlobDetails->encoding;
					
					echo "<b>ENCODING : </b>".$parentsBlobEncoding;
					$oldFiles[$fileName] = ($parentsBlobEncoding=="base64")?base64_decode($parentsBlobContent):utf8_decode($parentsBlobContent);
					
					echo "<br><br>";
				}
			}
			
			foreach($newFiles as $key2 => $value2)
			{
				require("diff.php");
			}
			
			echo "<br><br>";
		}
		echo "<br><br><br>";
	}
	
	curl_close($curl);
?>