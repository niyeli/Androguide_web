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
</head>
<body>

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
session_start();
if(isset($_SESSION['path']))
  echo $_SESSION['path'].'<br>';
  else
  echo "沒有path";

  $fpath=$_SESSION['path'];


    error_reporting(0);
    $email=$_POST['email'];
    echo '檢測完畢後，結果將寄至: '.$email.'<br>';
    echo '您可直接關閉視窗！';
    echo '謝謝您的使用！';

?>

<?php
  //fpath為檔案路徑
  function checkingfile($fpath,$email){
    $programPath = "/home/testlinux/misproject/MIS-project/src/check_apk.py";
    $command = 'nohup '.$programPath.' '.$fpath.' >./log/'.$fname.'.txt'.' 2>&1 &';
    exec($command);
  }
  session_destroy();
?>





</body>
</html>
