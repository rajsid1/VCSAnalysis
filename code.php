<?php
	$user="djadmin";
	//require_once("analysis/userDetails.php");
?>

<?php


	$codeArray=array(
		"repo"=>"VCSSample",
		"fileName"=>"sample.java",
		"sha"=>"ed838a6a5f5509ecbe466606e0f67441721a102e",
		"time"=>"2014-03-01T06:42:07Z",
		"code"=>"aW1wb3J0IGphdmEuaW8uKjsKcHVibGljIGNsYXNzIFNvbHV0aW9uIHsKICAg\nIHB1YmxpYyBzdGF0aWMgdm9pZCBtYWluKFN0cmluZyBhcmdzW10gKSB0aHJv\nd3MgRXhjZXB0aW9uIHsKICAgICAgICBCdWZmZXJlZFJlYWRlciBiciA9IG5l\ndyBCdWZmZXJlZFJlYWRlcihuZXcgSW5wdXRTdHJlYW1SZWFkZXIoU3lzdGVt\nLmluKSk7CiAgICAgICAgU3RyaW5nIGxpbmUgPSBici5yZWFkTGluZSgpOwog\nICAgICAgIGludCBOID0gSW50ZWdlci5wYXJzZUludChsaW5lKTsKICAgICAg\nICBmb3IgKGludCBpID0gMDsgaSA8IE47IGkrKykgewogICAgICAgICAgICBT\neXN0ZW0ub3V0LnByaW50bG4oImhlbGxvIHdvcmxkIik7CiAgICAgICAgfQog\nICAgfQp9\n",
		"startLine"=>"2",
		"encoding"=>"base64"
		);

	$repo=$codeArray["repo"];
	$fileName=$codeArray["fileName"];
	$sha=$codeArray["sha"];
	$time=$codeArray["time"];
	$code=$codeArray["code"];
	$startLine=$codeArray["startLine"];
	$encoding=$codeArray["encoding"];
?>


<?php

$ext = pathinfo($fileName, PATHINFO_EXTENSION);

//Syntax Highlighting bases on the code extension
$langs=array("java"=>"Java","cpp"=>"cpp","cs"=>"CSharp","css"=>"Css","js"=>"JScript","php"=>"Php","py"=>"Python","rb"=>"Ruby","xml"=>"Xml");
$lang = array_key_exists($ext, $langs) ? $langs[$ext] : "Plain";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CodeViewer</title>
	<script type="text/javascript" src="syntax/scripts/shCore.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrush<?php echo $lang?>.js"></script>
	<link type="text/css" rel="stylesheet" href="syntax/styles/shCoreDefault.css"/>
	<script type="text/javascript">
			SyntaxHighlighter.all();
			SyntaxHighlighter.config.strings.expandSource="+ Expand Source";
			SyntaxHighlighter.config.strings.aboutDialog="For more Help, Ping us at @VCSAnalysis";
			SyntaxHighlighter.config.strings.alert="Ping us @VCSAnalyis";
			SyntaxHighlighter.config.strings.help="!";
			
			//Configuration
			console.log(SyntaxHighlighter.defaults);
			//var sh=SyntaxHighlighter.defaults;
			
	</script>
</head>

<body style="background: white; font-family: Helvetica">

<h1><?php echo $fileName; ?></h1>
<pre class="brush: <?php echo strtolower($lang);?>; gutter:TRUE; ">
<?php
	
	echo ($encoding=="base64")?base64_decode($code):utf8_decode($code);
?>

</pre>

</html>
