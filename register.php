<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
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
    <h1>Notes-to do list</h1>
</div>

<form method="post" action="controller.php">
<input type="hidden" name="postaction" value="reg_user"/><br>
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>First Name: </td>
           <td><input type="text" name="fname" class="textInput"></td>
     </tr>
      <tr>
           <td>Last Name : </td>
           <td><input type="text" name="lname" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
      <tr>
           <td>Phone Number : </td>
           <td><input type="number" name="number" class="textInput"></td>
     </tr>
      <tr>
           <td>Date of Birth: </td>
           <td><input type="date" name="dob" class="textInput"></td>
     </tr>
      <tr>
           <td>Gender: </td>
           <td><input type="text" name="gender" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
 
</table>
</form>
</body>
</html>
