<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$code=$_POST["code2"];
$link=mysql_connect("localhost","root","");
mysql_select_db("school",$link);
mysql_query("delete from student where sid='$code'",$link);
mysql_close($link);
?>
<script language="javascript">
window.location="query.php";
</script>
</body>
</html>