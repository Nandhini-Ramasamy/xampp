<?php
mysql_connect("localhost","root","");
mysql_select_db("emp");
if(isset($_POST['submit']))
{
$em=$_POST['email'];
$new=$_POST['pass1'];
$cnew=$_POST['newpass2'];
if($new==$cnew)
{
$passhashof=password_hash($new,PASSWORD_DEFAULT);
mysql_query("update person set Password='$passhashof' where EmailID='$em'");
echo "Password updated successfully";
echo '<a href="trans.html">Make transaction</a>';
} 
else
{
echo "Password failed to update";
echo '<a href="insert1.php">click me</a>';
}
}
?>
