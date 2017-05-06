<?php
include_once("view/view_reg.php");
?>
<html>
<head><title>Regitration</title>
</head>
<body>
	
		<form>
		<h1> Registration Page</h1>
		<form action="home_page.php">
			<body id="body-color" align="center"> 
			<div id="Sign-Up"> 
			<fieldset style="width:97%">
			<legend>Registration Form</legend> 
			<table border="1" align="center" length="50%" width="50%">
			<tr> <form method="POST" action="connectivity-sign-up.php">
					<td width="auto">Name</td>
					<td> <input type="text" name="name"></td> 
			</tr> 
			<tr> <td>First Name</td>
					<td width="70% "> <input type="text" name="fname"></td>
			</tr>
			<tr> <td>Last Name</td>
					<td width="70% "> <input type="text" name="lname"></td>
			</tr>
			<tr> <td>Date of Birth</td>
					<td width="70% "> <input type="date" name="dob"></td>
			</tr>
			<tr> <td>Gender</td>
					<td width="70% "> <input type="text" name="gender"></td>
			</tr>
			<tr> <td>Email</td>
					<td> <input type="text" name="email"></td>
			</tr> 
			<tr> <td>User Name</td>
					<td width="70% "> <input type="text" name="user"></td>
			</tr> 
			
			<tr> <td>Password</td>
					<td> <input type="password" name="pass"></td> 
			</tr>
			
			<tr> <td colspan=2 align="center"><input id="button" type="submit" name="submit" value="Sign-Up"></td>
					
			</tr> 
			</form>
			</table>
			</fieldset>
			</div> 
</body> 
</html>

