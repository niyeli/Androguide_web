<?php
	session_start();
?>
<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin AngularJS Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>App checks</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for AngularJS. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<style>
/* Hide Angular JS elements before initializing */
.ng-cloak {
    display: none;
}
</style>
<style type="text/css">
		/*this is just to organize the demo checkboxes*/
		label {margin-right:20px;}
	</style></head>
<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-104779247-1', 'auto');
			ga('send', 'pageview');

		  </script>
</head>
<body>
  <br>

<div class="navbar navbar-default navbar-fixed-top" style="background: linear-gradient(rgba(71, 163, 255, 0.95), rgba(0, 204, 204, 0.95) ); ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../images/LOGO14.png" alt="Logo"></a>
            <a class="navbar-brand" href="../index.php">Androguide</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../works/works.php">Works</a></li>
                <li><a href="#">App checks</a></li>


            </ul>
        </div>
    </div>
</div>
<div class="container2">
    <h1>上傳Apk/填寫檔案網址</h1>
    <h2 class="lead">檢測是否為安全的apk</h2>
   <blockquote>
       <p>直接填寫apk檔案下載連結，也可以立刻進行檢測哦！</p>
       </blockquote>

    <ul class="nav nav-tabs">

        <li class="active"><a href="angularjs.php"> upload apks</a></li>
        <li class="active"><a href="uploadlink.php">paste links</a></li>
    </ul>

    <br>

    <form name='uploadlink' action="upload.php" id='uploadlink' enctype="multipart/form-data">

        <div class="col-lg-7">
            <span>連結：

                <input type="text" name='link' method="POST" class="css-input" id='link'>

        <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
                    <i class="glyphicon glyphicon-cloud"></i>
                     <span>Paste links...</span>
                    <input type="button" name="submit[]" value="Add links..." onclick='processFormData();' multiple ng-disabled="disabled">
                </span>
       </div>
    </form>
    <br><br><br><br>
    <div class="col-lg-7">

      <form  action="upload.php" method="post">
        <?php
					error_reporting(0);
					$_SESSION['path'] = glob('server/php/files/*.apk');
					echo $_SESSION['path'][0].".<br>";
					$_SESSION['filename'] = basename ($_SESSION['path'][0]);
					echo $_SESSION['filename'].".<br>";


          if(isset($_SESSION['path'][0])) {
            //echo "The path is " .$_SESSION['path'] . ".<br>";
						echo "上傳完成後請輸入Email，我們將會寄出檢測結果。".".<br>".".<br>";
            echo "Your Email: <input type='text' name='email' \\/>"." ";
            echo "<input type='submit' name='submit' value='送出' >".".<br>";
          }
        ?>
      </form>
    </div>




</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload Angular JS module -->
<script src="js/jquery.fileupload-angular.js"></script>
<!-- The main application script -->
<script src="js/app.js"></script>
<script>
function processFormData() {
  //get form element
  var oform = document.forms['uploadlink'];
  var link = oform.elements.link.value;
  alert('檢測的連結：' + link);
}
</script>
</body>
</html>
