<?php
	$user="djadmin";
	//require_once("analysis/userDetails.php");
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
		  "site_admin"=> false,
		  "name"=> "Dheeraj Joshi",
		  "company"=> "Vellore Institute of Technology",
		  "blog"=> null,
		  "location"=> "Vellore",
		  "email"=> "dheerajjoshi1991@gmail.com",
		  "hireable"=> true,
		  "bio"=> null,
		  "public_repos"=> 11,
		  "public_gists"=> 7,
		  "followers"=> 3,
		  "following"=> 28,
		  "created_at"=> "2012-09-25T19:07:06Z",
		  "updated_at"=> "2014-03-01T07:03:20Z"
	);

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CodeViewer</title>

	 <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">

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
<!--Profile Show -->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	 <div class="carousel-inner">
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:test" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h4><img src="https://avatars.githubusercontent.com/u/103350" alt="image of Russell Belfer"></h4>
              <p><h2>Russell Belfer <a href="https://github.com/arrbee">arrbee</a></h2></p>
				    
				        <p>Email: <a href="mailto:rb@github.com">rb@github.com</a></p>
				        <p>Company: GitHub</p>
				        <p>Joined: July 9, 2009</p>
				        <br/>	
				    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1392079123.html#_=1393650850479&amp;count=none&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee&amp;size=m&amp;text=My%20gitspective%3A%20&amp;url=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee" class="twitter-share-button twitter-tweet-button twitter-count-none" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 59px; height: 20px;"></iframe>
             	
              <!--<p>A better approach to make code efficient and reusable. Pick a <code>Repo</code> and make it more efficient.</p>
              <br/><br/><!--<p>Get Sarted by entering your Github Username<br/></p>

              <p><input class="btn btn-lg" style="cursor:text;" id="username" type="text" placeholder="Github UserName"></p>
              <p><a class="btn btn-lg btn-primary" id="submitBtn" onClick="login()" role="button">Click to Review</a></p>-->
            </div>
          </div>
        </div>
      </div>  
    </div>



     <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Syntax Highlighting</h2>
          <p>It supports syntax Highlighting for all the programming languages with smart indentation and error Highlighting.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Performance Tweaks</h2>
          <p>It helps to increase the programming skills and thus increase your productivity as well with a lot of test cases covered.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Function Linking</h2>
          <p>No need to iterate over each and every file of the code base to find a particular function defination. Just hover over the function call.</p>
           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



    <!--
				</div>
				  <div class="span5">
				    <h1>Russell Belfer <a href="https://github.com/arrbee">arrbee</a></h1>
				    <ul>
				        <li>Email: <a href="mailto:rb@github.com">rb@github.com</a></li>

				        <li>Company: GitHub</li>

				        <li>Joined: July 9, 2009</li>
				    </ul>
				  </div>

				  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1392079123.html#_=1393650850479&amp;count=none&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee&amp;size=m&amp;text=My%20gitspective%3A%20&amp;url=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee" class="twitter-share-button twitter-tweet-button twitter-count-none" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 59px; height: 20px;"></iframe>
				  
				</header>
	-->
<!--Profile End -->
<!--Show Code -->	
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
					"commitMessage"=>"Second file added"
					),
				array(
					"repo"=>"VCSSample2",
					"fileName"=>"sample.py",
					"sha"=>"ed838a6a5f5509ecbe466606e0f67441721a102e",
					"time"=>"2014-03-01T06:42:07Z",
					"code"=>"TiA9IGludChyYXdfaW5wdXQoKSkKZm9yIGkgaW4geHJhbmdlKE4pOgogICAg\ncHJpbnQgImhlbGxvIHdvcmxkIgo=\n",
					"startLine"=>"2",
					"encoding"=>"base64",
					"commitMessage"=>"Second file added"
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
		$commitMessage=$codeArray["commitMessage"];

		$ext = pathinfo($fileName, PATHINFO_EXTENSION);

		//Syntax Highlighting bases on the code extension
		$langs=array("java"=>"Java","c"=>"cpp","cpp"=>"cpp","cs"=>"CSharp","css"=>"Css","js"=>"JScript","php"=>"Php","py"=>"Python","rb"=>"Ruby","xml"=>"Xml");
		$lang = array_key_exists($ext, $langs) ? $langs[$ext] : "Plain";

		echo "<h3><a href='#'>$fileName</a></h3>";
		echo "<div>";
		echo "<i>$commitMessage</i>";
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

<!-- Code End -->

</body>
</html>