<?php
include "connect.php";

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);

//echo "ac = $ac";
mysql_select_db("peakbrian_db",$connection) or die("Could not select database");

$login_temp = null;

$checkExist = mysql_query("select * from login where login = '$login' and password = '$password'");

while($row = mysql_fetch_assoc($checkExist)){
    $login_temp = $row["login"];
	break;
}


//print("testing");
//echo "[".$login_temp."]";

//can't repeat
if($login_temp != null){
   print("Del fail!");
   return;
}

$sql = "delete from login where login = '$login' and password = '$password' and email = 'email'";

//echo $sql;
$result = mysql_query($sql);

/*if (mysql_num_rows($checkExist) == 0) {
print("Register rejected by already exist!");
} else {
*//* print("The AC:<br />\n");
while ($row = mysql_fetch_assoc($result)) {
$a1 = $row["login"];
$a3 = $row["password"];
print("name: $a1, password: $a3\n");
} */
echo "del success!";
//}
//echo "aasda = "+$result["count(*)"];
?>