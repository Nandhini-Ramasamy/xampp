<?php
mysql_connect("localhost","root","");
mysql_select_db("emp");
if(isset($_POST['MTR']))
{
$email=$_POST['email'];
$amount=$_POST['amt'];
$int="SELECT Amount FROM person WHERE EmailID='$email'";
$amount1=$int-$amount;
mysql_query("update person set Amount='$amount1' where EmailID='$email'");
echo "Database updated successfully";
mysql_close();
}
?>