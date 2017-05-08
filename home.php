<?php
session_start();


$db=mysqli_connect("localhost","root","","authentication");


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
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>
</div>
<a href="logout.php">Log Out</a>
</body>
</html>
