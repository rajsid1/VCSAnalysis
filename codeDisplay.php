<?php
	$user="djadmin";
	require_once("analysis/userDetails.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CodeViewer</title>
	<script type="text/javascript" src="syntax/scripts/shCore.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushJava.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushcpp.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushCss.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushPhp.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushPython.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushRuby.js"></script>
	<script type="text/javascript" src="syntax/scripts/shBrushXml.js"></script>
	<link type="text/css" rel="stylesheet" href="syntax/styles/shCoreDefault.css"/>
	<link type="text/css" rel="Stylesheet" href="syntax/Styles/shThemeMidnight.css"/>
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


	<!--Accordian Part -->
	<link type="text/css" rel="stylesheet" href="jquery/css/jquery-ui-1.8.9.custom/jquery-ui-1.8.9.custom.css" />
	<script type="text/javascript" src="jquery/jquery-1.4.3.min.js"></script>	
	<script type="text/javascript" src="jquery/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.multi-accordion-1.5.3.js"></script>
	<style type="text/css">
		/*demo page css*/
		body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
	</style>	

	<!--Accordian End -->
</head>

<body style="background: white; font-family: Helvetica">
<div id="multiAccordion">
<?php


	$codeArrays=array(
				array(
					"repo"=>"VCSSample",
					"fileName"=>"sample2.py",
					"sha"=>"ed838a6a5f5509ecbe466606e0f67441721a102e",
					"time"=>"2014-03-01T06:42:07Z",
					"code"=>"IyEvdXNyL2Jpbi9lbnYgcHl0aG9uIAoiIiIKaWRlb25lLmNvbQpBUEkgc2Ft\ncGxlCgpUaGlzIHNjcmlwdCBzaG93cyBob3cgdG8gdXNlIGlkZW9uZSBhcGku\nCiIiIgoKZnJvbSBTT0FQcHkgaW1wb3J0IFdTREwKCiMgY3JlYXRpbmcgd3Nk\nbCBjbGllbnQKd3NkbE9iamVjdCA9IFdTREwuUHJveHkoJ2h0dHA6Ly9pZGVv\nbmUuY29tL2FwaS8xL3NlcnZpY2Uud3NkbCcpCgojIGNhbGxpbmcgdGVzdCBt\nZXRob2QKcmVzcG9uc2UgPSB3c2RsT2JqZWN0LnRlc3RGdW5jdGlvbigndGVz\ndCcsJ3Rlc3QnKQoKIyBwcmludGluZyByZXR1cm5lZCB2YWx1ZXMKZm9yIGl0\nZW0gaW4gcmVzcG9uc2VbJ2l0ZW0nXToKICAgICAgICBwcmludCBpdGVtCg==\n",
					"startLine"=>"2",
					"encoding"=>"base64",
					"commitName"=>"Second file added"
					),
				array(
					"repo"=>"VCSSample2",
					"fileName"=>"sample.py",
					"sha"=>"ed838a6a5f5509ecbe466606e0f67441721a102e",
					"time"=>"2014-03-01T06:42:07Z",
					"code"=>"TiA9IGludChyYXdfaW5wdXQoKSkKZm9yIGkgaW4geHJhbmdlKE4pOgogICAg\ncHJpbnQgImhlbGxvIHdvcmxkIgo=\n",
					"startLine"=>"2",
					"encoding"=>"base64",
					"commitName"=>"Second file added"
					)
	);
	foreach ($codeArrays as $id => $codeArray) {
		$repo=$codeArray["repo"];
		$fileName=$codeArray["fileName"];
		$sha=$codeArray["sha"];
		$time=$codeArray["time"];
		$code=$codeArray["code"];
		$startLine=$codeArray["startLine"];
		$encoding=$codeArray["encoding"];
		$commitName=$codeArray["commitName"];

		$ext = pathinfo($fileName, PATHINFO_EXTENSION);

		//Syntax Highlighting bases on the code extension
		$langs=array("java"=>"Java","c"=>"cpp","cpp"=>"cpp","cs"=>"CSharp","css"=>"Css","js"=>"JScript","php"=>"Php","py"=>"Python","rb"=>"Ruby","xml"=>"Xml");
		$lang = array_key_exists($ext, $langs) ? $langs[$ext] : "Plain";

		echo "<h3><a href='#'>$fileName</a></h3>";
		echo "<div>";
		echo "<i>$commitName</i>";
		echo "<pre class='brush:".strtolower($lang)."; gutter:TRUE;'>";
		echo ($encoding=="base64")?base64_decode($code):utf8_decode($code);
		echo "</pre>";
		echo "</div>";
 }
	
?>
</div>
<script type="text/javascript">
		$(function(){
			$('#multiAccordion').multiAccordion({
				active: [1, 2],
				click: function(event, ui) {
					//console.log('clicked')
				},
				init: function(event, ui) {
					//console.log('whoooooha')
				},
				tabShown: function(event, ui) {
					//console.log('shown')
				},
				tabHidden: function(event, ui) {
					//console.log('hidden')
				}
				
			});
			
			$('#multiAccordion').multiAccordion("option", "active", []);
		});
</script>
</body>
</html>