<html>
<head>
<title> New user </title>
<script>
function f1()
{
if(document.fname.name.value=="")
{
alert("your name field is empty");
return false;
}  
if(document.fname.email.value=="")
{
alert("your emailid field is empty");
return false;
}
if(document.fname.accno.value=="")
{
alert("your accno field is empty");
return false;
}  
if(document.fname.add.value=="")
{
alert("your add field is empty");
return false;
}  
if(document.fname.branch.value=="")
{
alert("your branch field is empty");
return false;
}  
if(document.fname.amt.value=="")
{
alert("your amount field is empty");
return false;
}  
if(document.fname.phno.value=="")
{
alert("your phno field is empty");
return false;
}  
if(document.fname.pass.value=="")
{
alert("your pass field is empty");
return false;
}  
if(document.fname.pass.length>15)
{
alert("your password should be atmost 15 character");
return false;
}  
if(document.fname.pass.value!=document.fname.pass1.value)
{
alert("password doesn't match");
return false;
}  
return true;
}
</script>
</head>
<body>
<form name="fname" method="POST" action="h.php" onclick="f1()">
<center>
<table border="0">
<tr>
<th>Name:</th>
<td><input type="text" name="name" placeholder="enter your name"><td><br></br>
</tr>
<tr>
<th>EmailID:</th>
<td><input type="text" name="email" placeholder="enter your mail"><td><br></br>
</tr>
<tr>
<th>AccountNo:</th>
<td><input type="text" name="accno" placeholder="enter your accno"><td><br></br>
</tr>
<tr>
<th>Address:</th>
<td><textarea rows="5" cols="25" name="add" placeholder="enter your add"></textarea><td><br></br>
</tr>
<tr>
<th>Branch:</th>
<td><select name="branch" placeholder="select">
	<option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
    </select
<td><br></br>
</tr>
<tr>
<th>Amount:</th>
<td><input type="text" name="amt" placeholder="enter amount"><br></br>
</td>
</tr>
<tr>
<th>Phone no:</th>
<td><input type="text" name="phno" placeholder="enter your phno"><td><br></br>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="pass" placeholder="enter your password"><td><br></br>
</tr>
<tr>
<th>Confirm Password:</th>
<td><input type="password" name="pass1" placeholder="enter your password"><td><br></br>
</tr>
<tr>
<th></th>
<td><input type="submit" name="submit1" value="ok" ></td>
</tr>
</table>
</center>
</form>
</body>
</html>