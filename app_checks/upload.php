<!DOCTYPE html>
<html>
<head>
  <title>File Upload</title>
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

<?php
if($_FILES['file']['error']>0){
  exit("檔案上傳失敗！");//如果出現錯誤則停止程式
}
else{
echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>"; 
echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
echo "暫存名稱: " . $_FILES["file"]["tmp_name"]; 
move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);//複製檔案
echo '<a href="upload/'.$_FILES['file']['name'].'">upload/'.$_FILES['file']['name'].'</a>';//顯示檔案路徑
echo '<br>檢測結果：';
echo checkingfile('/var/www/html/app_checks/upload/'.$_FILES['file']['name'].'',$_FILES['file']['name']);
echo '<a href="log/'.$_FILES['file']['name'].'">result/</a>';
}

?>

<?php

function checkingfile($fname,$file){
  $a = "/home/testlinux/misproject/MIS-project/src/check_apk.py ";
  $command = 'nohup '.$a.$fname.' &>./log/'.$file.' &';
  echo "<br>";
  print_r($command);
  echo "<br>";
  $command = escapeshellcmd($command);
  $answer = exec($command);
  print_r($answer);
  return $answer;
}

?>





</body>
</html>
