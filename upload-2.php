<?php
$target = "upload/";
$target = $target.basename($_FILES['uploaded']['name']);

$file_name = $_FILES['uploaded']['name'];
$file_type = $_FILES['uploaded']['type'];
$file_size = $_FILES['uploaded']['size'];

if(strstr($file_name,".pdf")){
	die(".EXE files are not allowed");	
}
if($file_size > 3500)
{
	die("File too large...");	
}
if(move_uploaded_file($_FILES['uploaded']['tmp_name'],$target))
{
	echo "The file named:".$_FILES['uploaded']['name']." has been uploaded";	
}
else{
	echo "Sorry can't upload file....";	
}
?>