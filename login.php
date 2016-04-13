<?php
include "connect.php";

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);

//echo "login = $login";
mysql_select_db("peakbrian_db",$connection) or die("Could not select database");

$sql = "select * from login where login = '$login' and password = '$password'";
//echo $sql;
$result = mysql_query($sql);
if (mysql_num_rows($result) == 0) {
echo mysql_num_rows($result);
} else {
/* print("The AC:<br />\n");
while ($row = mysql_fetch_assoc($result)) {
$a1 = $row["login"];
$a3 = $row["password"];
print("name: $a1, password: $a3\n");
} */
//echo "login OK!";
echo "OK";
}
//echo "aasda = "+$result["count(*)"];

     