<?php
$conn = mysql_connect("localhost","root","");
$db=mysql_select_db("emp");
if(isset($_POST['s2'])) 
{
$email=$_POST['email'];
$pass=$_POST['pass'];
$passhash=password_hash($pass,PASSWORD_DEFAULT);
$query=mysql_query("SELECT * FROM person WHERE EmailID='$email' AND Password='$passhash'");
if($query)
{
echo "login success";
echo '<a href="update.html">click here</a>';
}
else
{
echo "wrong login";
echo '<a href="insert1.php">signup</a>';
}
}
if(isset($_POST['submit1']))
{
$conn = mysql_connect('localhost','root','');
$db=mysql_select_db('emp');
$name=$_POST['name'];
$email=$_POST['email'];
$accno=$_POST['accno'];
$add=$_POST['add'];
$branch=$_POST['branch'];
$amt=$_POST['amt'];
$phno=$_POST['phno'];
$pass=$_POST['pass'];
if($name!=''&&$email!=''&&$accno!=''&&$add!=''&&$branch!=''&&$amt!=''&&$phno!=''&&$pass!='')
{
$passhash=password_hash($pass,PASSWORD_DEFAULT);
$query = mysql_query("INSERT INTO person(Name,EmailID,Accountno,Address,Branch,Amount,Phoneno,Password)VALUES('$name','$email','$accno','$add','$branch','$amt','$phno','$passhash')");
echo "Successfully inserted";
}
mysql_close($conn);
}
?>