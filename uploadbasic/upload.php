<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
  <!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104779247-1', 'auto');
  ga('send', 'pageview');

</script> -->

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

  <div class="navbar navbar-default navbar-fixed-top" style="background: linear-gradient(rgba(71, 163, 255, 0.95), rgba(0, 204, 204, 0.95)); ">
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
  <br>


  <div class="container2" style=" border:5px #97CBFF dashed; font-size:30px; font-family: Microsoft JhengHei;">

    <br>
    <?php

    session_start();
    error_reporting(0);
    // if(isset($_SESSION['path'][0]))
    //   echo $_SESSION['path'][0].'<br>';
    //   else
    //   echo "沒有path";

      $fpath=$_SESSION['path'][0];
      $fname = $_SESSION['filename'];

        $email=$_POST['email'];
        //echo $fname.'<br>';
        echo '檢測結果將寄至: '.$email.'<br>';
        echo '您可直接關閉視窗！';
        echo '謝謝您的使用！'.'<br>'.'<br>';
        checkingfile($fpath,$fname,$email);
        //echo '<a href="log/'.$_FILES['file']['name'].'.txt'.'">result/</a>';

    ?>


 </div>



<?php
// if($_FILES['file']['error']>0){
//   exit("檔案上傳失敗！");//如果出現錯誤則停止程式
// }
// else{
// echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
// echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
// echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
// echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
// move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);//複製檔案
// echo '<a href="upload/'.$_FILES['file']['name'].'">upload/'.$_FILES['file']['name'].'</a>';//顯示檔案路徑
// echo '<br>檢測結果：';
// checkingfile('/var/www/html/app_checks/upload/'.$_FILES['file']['name'].'',$_FILES['file']['name']);
// echo '<a href="log/'.$_FILES['file']['name'].'.txt'.'">result/</a>';
// }
// session_start();
// error_reporting(0);
// if(isset($_SESSION['path'][0]))
//   echo $_SESSION['path'][0].'<br>';
//   else
//   echo "沒有path";
//
//   $fpath=$_SESSION['path'][0];
//   $fname = $_SESSION['filename'];
//
//     $email=$_POST['email'];
//     echo $fname.'<br>';
//     echo '檢測完畢後，結果將寄至: '.$email.'<br>';
//     echo '您可直接關閉視窗！';
//     echo '謝謝您的使用！';
//     checkingfile($fpath,$fname,$email);
//     //echo '<a href="log/'.$_FILES['file']['name'].'.txt'.'">result/</a>';

?>

<?php
//fpath為檔案路徑
function checkingfile($fpath,$fname,$email){
  $programPath = "/home/testlinux/misproject/MIS-project/src/check_apk.py";
  $command = 'python3 '.$programPath.' -a '.$fpath.' -b '.$email.' -c '.$fname.' > /dev/null &';
  //print_r($command);
  exec($command);
}
  session_destroy();
?>





</body>
</html>
