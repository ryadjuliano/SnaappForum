<?php
$crud = $_REQUEST['crud'];

$host = "localhost";
$username = "root";
$password ="";

$namadb = "forumsnaapp";
$koneksi = mysql_connect($host,$username,$password);
mysql_select_db($namadb,$koneksi);

if($crud == "getupload")
{

$subject = "MATH";
$tag = "RE";
$posting = "asd";


move_uploaded_file($_FILES["file"]["tmp_name"], "photo/".$_FILES["file"]["name"]);
$imagename="photo/".$_FILES['file']['name'];
$file_name = "../images/".$_FILES["file"]["name"];

$sql="INSERT INTO tbl_post_forum  VALUES ('','$subject','$tag','','$posting')";
    $result = mysql_query($sql);
	$rc = mysql_affected_rows();

	if($result)
	{
		echo "done";
	}
	
}
else
{
	echo "die";
}


?>