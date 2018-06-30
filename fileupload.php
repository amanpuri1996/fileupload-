<?php
if(isset($_POST['submit'])){
$f_name = $_FILES['myfile']['name'];
$f_tmp = $_FILES['myfile']['tmp_name'];
$store = "upload/".$f_name;
if(move_uploaded_file($f_tmp,$store))
{
	echo "File uploaded succesfully";
}
else
{
	echo "404 erroe please check your code";
}
}
?>
<html>
<body>
<form action="" method ="post" enctype="multipart/form-data">
<p><input type="file" name="myfile"></p>
<p><input type="submit" value="upload" name="submit"></p>
</form>
</body>
</html>