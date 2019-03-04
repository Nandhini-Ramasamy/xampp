<html>
<head>
<title>web page</title>
<style>
body
{
padding:100px;
border-style:solid;
border-color:black;
border-width:5px;
background-color:white;
}
</style>
<script>
function f2()
{
if(document.formname.email.value=="")
{
alert("Username field is empty");
return false;
}
if(document.formname.pass.value=="")
{
alert("Your password field is empty");
return false;
}
return true;
}
</script>
</head>
<body>
<marquee><h3>WELCOME</h3></marquee>
<form name="formname" method="POST" action="h.php" onclick="f2()">
<table border="0">
<tr>
<th>EmailID:</th>
<td><input type="text" name="email" placeholder="enter name"></td>
<br></br>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="pass" placeholder="enter password"></td>
<br></br>
</tr>
<tr>
<th></th>
<td><input type="submit" name="s2" value="signin"></td>
<br></br>
</tr>
</form>
</body>
</html>
