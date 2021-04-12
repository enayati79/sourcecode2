<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<p>
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("school",$link);
$result=mysql_query("select * from student",$link);
echo "<table border='1px'>";
echo "<tr>";
echo "<th>ID Student</th><th>Name Student</th><th>Family Student</th>";
echo "</tr>";
while($record=mysql_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>$record[sid]</td><td>$record[sname]</td><td>$record[sfamily]</td>";
    echo "</tr>";
}
echo "</table>";
?>
</p>
<form id="form1" name="form1" method="post" action="FormUpdate.php">
  <label for="code1">Enter ID Update:</label>
  <input type="text" name="code1" id="code1"  />
  <input type="submit" name="button" id="button" value="Update" />
</form>
</br>
<form id="form2" name="form2" method="post" action="delete.php">
  <label for="code2">Enter ID for Delete :</label>
  <input type="text" name="code2" id="code2" />
  <input type="submit" name="button2" id="button2" value="Delete" />
</form>
</body>
</html>