<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" Content = "text/html; charset=utf-8" />
<title> Untitled Document </title>    
</head>

<body>

<?php
//extract($_POST);

//connect to server
$connect = mysqli_connect ("localhost", "root", "", "klinik_ajwa");

if (!$connect) {
    die ('Error : '.mysqli_connect_error());
}

?>
</body>
</html>