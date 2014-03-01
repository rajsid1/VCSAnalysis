<?php
	$user="djadmin";
	
	$userDetails=array(
	  "login"=> "djadmin",
	  "id"=> 2422581,
	  "avatar_url"=> "https://avatars.githubusercontent.com/u/2422581",
	  "gravatar_id"=> "99a1c6a52cc56cc25cde65be5d54081a",
	  "url"=> "https://api.github.com/users/djadmin",
	  "html_url"=> "https://github.com/djadmin",
	  "followers_url"=> "https://api.github.com/users/djadmin/followers",
	  "following_url"=> "https://api.github.com/users/djadmin/following{/other_user}",
	  "gists_url"=> "https://api.github.com/users/djadmin/gists{/gist_id}",
	  "starred_url"=> "https://api.github.com/users/djadmin/starred{/owner}{/repo}",
	  "subscriptions_url"=> "https://api.github.com/users/djadmin/subscriptions",
	  "organizations_url"=> "https://api.github.com/users/djadmin/orgs",
	  "repos_url"=> "https://api.github.com/users/djadmin/repos",
	  "events_url"=> "https://api.github.com/users/djadmin/events{/privacy}",
	  "received_events_url"=> "https://api.github.com/users/djadmin/received_events",
	  "type"=> "User",
	  "site_admin"=> FALSE,
	  "name"=> "Dheeraj Joshi",
	  "company"=> "Vellore Institute of Technology",
	  "blog"=> null,
	  "location"=> "Vellore",
	  "email"=> "dheerajjoshi1991@gmail.com",
	  "hireable"=> TRUE,
	  "bio"=> null,
	  "public_repos"=> 11,
	  "public_gists"=> 7,
	  "followers"=> 3,
	  "following"=> 28,
	  "created_at"=> "2012-09-25T19:07:06Z",
	  "updated_at"=> "2014-03-01T07:03:20Z"
	);

	$codeArray=array(,
		"repo"=>"VCSSample",
		"fileName"=>"sample.java",
		"sha"=>"ed838a6a5f5509ecbe466606e0f67441721a102e"
		"time"=>"2014-03-01T06:42:07Z"
		);
?>


<?php

$ext="py";

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
			var sh=SyntaxHighlighter.defaults;
			sh[first-line]:
	</script>
</head>

<body style="background: white; font-family: Helvetica">

<h1>CodeReviewer</h1>
<pre class="brush: <?php echo strtolower($lang);?>; gutter:TRUE;">
from PIL import Image
img=Image.open("vit.bmp")

</pre>

</html>
