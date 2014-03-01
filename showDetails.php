<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Code Display</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!--Accordian -->
          <link type="text/css" rel="stylesheet" href="jquery/css/jquery-ui-1.8.9.custom/jquery-ui-1.8.9.custom.css" />
         
         
    <!--Accordian -->    


  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">VCSAnalysis</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="border:1px">
                <div style="float:right;">
                  <center>
                      <br/><br/><br/><br/>
                      <p>
                       Email: <span class="text-muted"> rb@github.com</span>&nbsp&nbsp&nbsp&nbsp <br/>    
                      Company:<span class="text-muted">GitHub</span>              &nbsp&nbsp&nbsp&nbsp<br/>
                       Joined:<span class="text-muted"> July 9, 2009</p></span>
                      
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1392079123.html#_=1393650850479&amp;count=none&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee&amp;size=m&amp;text=My%20gitspective%3A%20&amp;url=http%3A%2F%2Fzmoazeni.github.io%2Fgitspective%2F%23%2Ftimeline%2Farrbee" class="twitter-share-button twitter-tweet-button twitter-count-none" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 59px; height: 20px;"></iframe>
        
                  </center>
                </div>
                <h3 class="circular" style="background: url(https://avatars.githubusercontent.com/u/103350) no-repeat;"></h3>
                    <p><h3>&nbsp&nbsp&nbsp&nbsp&nbspRussell Belfer&nbsp<br/> <a href="https://github.com/arrbee">
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp@arrbee</a></h3></p>
                  
      </div>


<!-- Accordian -->
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
<!-- Accordian End -->
<!--


      <div class="page-header">
        <h1>Buttons</h1>
      </div>
      <p>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
      </p>
      <p>
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
      </p>



      <div class="page-header">
        <h1>Thumbnails</h1>
      </div>
      <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">



      <div class="page-header">
        <h1>Dropdown menus</h1>
      </div>
      <div class="dropdown theme-dropdown clearfix">
        <a id="dropdownMenu1" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
        </ul>
      </div>




      <div class="page-header">
        <h1>Navbars</h1>
      </div>

      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>



      <div class="page-header">
        <h1>Alerts</h1>
      </div>
      <div class="alert alert-success">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div class="alert alert-info">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
      <div class="alert alert-warning">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
      <div class="alert alert-danger">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>



      <div class="page-header">
        <h1>Progress bars</h1>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
        <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
        <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
      </div>



      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="list-group">
            <a href="#" class="list-group-item active">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a href="#" class="list-group-item">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div>
      </div>



      <div class="page-header">
        <h1>Panels</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div>
      </div>



      <div class="page-header">
        <h1>Wells</h1>
      </div>
      <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

  <!-- Syntax Highlighter -->
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

  <!-- SH End -->
  <!--Accordian -->
    <script type="text/javascript" src="jquery/jquery-ui-1.8.13.custom.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.multi-accordion-1.5.3.js"></script> 

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
<!--Accordian Ended -->



  </body>
</html>
