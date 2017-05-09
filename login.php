<?php 
if ( isset($_GET['errormsg']) && $_GET['errormsg'] == 1 )
{
    
     $error = "Email address & password combination is incorrect!!";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notes</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="header">
    <h1>Notes- to do list</h1>
</div>
<h3><?php echo $error; ?></h3>
<form method="post" action="controller.php">
<input type="hidden" name="postaction" value="login_action"/><br>
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In" value="Login"></td>
     </tr>
 
</table>
</form>

<form method="post" action="register.php">

<td><input type="submit" align="center" name="register" class="Log In" value="Register" ></td>
</form>

</body>
</html>

