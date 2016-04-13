<?php
include "connect.php";

//echo "testing";

$json1=array();
$results = array();


//$comment = trim($_POST["user_comments"]);

$type = @$_GET['type'];

mysql_select_db("peakbrian_db",$connection) or die("Could not select database");

if($type == "submit"){
	$name = $_POST['name_php'];
	$comments = $_POST['user_comments'];
	$result = mysql_query("INSERT INTO comments (name, body) VALUES ('$name','$comments')") or die("Could not issue MySQL query");
	//echo 'submit';
	$json['result'] = true;
	echo json_encode($json);
}else{
	//echo 'read';
	
	$show_result = mysql_query("select * from comments");
		
		
		
	//$rows = array();
	while($row = mysql_fetch_array($show_result)){
		//$json1[]=$row;
		//$/result = array("name" => $row[1]);
		//$rows.push($result);
		$tempObj = array();
		$tempObj['name'] = $row['name'];
		$tempObj['comment'] = $row['body'];
		$json[] = $tempObj;
	}	
	
	echo json_encode($json);
}

/*if ($comments == "" && $name == ""){
	
}else{

$result = mysql_query("INSERT INTO comments (name, body) VALUES ('$name','$comments')") or die("Could not issue MySQL query");
}

if($type != "sumbit"){
	$show_result = mysql_query("select * from comments");
		
		
		
		//$rows = array();
		while($row = mysql_fetch_array($show_result)){
			//$json1[]=$row;
			//$/result = array("name" => $row[1]);
			//$rows.push($result);
			$results[] = array(
			'name' => $row['name'],
			  'body' => $row['body']
			 );
		
		}	
}else{ // submit result

			$results[] = array(
			'name' => $name,
			  'body' => $comments
			 );
}*/



?>