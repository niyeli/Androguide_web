<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

<?php
//?php
if($_FILES['file']['error']>0){
  exit("檔案上傳失敗！");//如果出現錯誤則停止程式
}
else{
move_uploaded_file($_FILES['file']['tmp_name'],'file/'.$_FILES['file']['name']);//複製檔案
echo '<a href="upload/'.$_FILES['file']['name'].'">file/'.$_FILES['file']['name'].'</a>';//顯示檔案路徑

}
?>




</body>
</html>
