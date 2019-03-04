<?php
$message="";
if(count($_POST)>0) {
	$conn = mysql_connect("localhost","root","");
	$result = mysql_query($conn,"SELECT * FROM users WHERE Username='" . $_POST["userName"] . "' and Password = '". $_POST["password"]."'");
	$count  = mysql_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>