<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php
$code=$_POST["code1"];
$link=mysql_connect("localhost","root","");
mysql_select_db("school",$link);
$result=mysql_query("select * from student where sid='$code'",$link);
echo "<form id='form1' name='form1' method='post' action='Update.php'>";
while ($record=mysql_fetch_assoc($result))
{
  echo "<p><label for='code'>ID student : </label>  <input type='text' name='code' id='code' value=$record[sid] readonly='readonly' /></p>";
  echo "<p><label for='name'>Name student : </label> <input type='text' name='name' id='name' value=$record[sname] /></p>";
  echo "<p><label for='family'>Family student : </label> <input type='text' name='family' id='family' value=$record[sfamily] /></p>";
}
mysql_close($link);
?>
  </p>
  </form>
</p>
<p>
  <input type="submit" name="button" id="button" value="Save" />
</p>

</body>
</html>