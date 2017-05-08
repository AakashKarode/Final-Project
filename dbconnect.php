<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=ark56';
 $username = 'ark56';
 $password = 'QUE6Pquc';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch(PDOException $e){
   $error_message= $e->getMessage();
   echo $error_message;
   exit();
 }  
 ?>
 
 <?php
 function addUser($username,$fname,$lname,$email,$number,$dob,$gender,$password,$password2){   
 global $db;
 
$query = 'insert into users(email,password,password2,username,fname,lname,number,dob,gender) values(:email,:password,:password2,:username,:fname,:lname,:number,:dob,:gender)';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':email',$email);
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':number',$number);
$statement->bindValue(':dob',$dob);
$statement->bindValue(':gender',$gender);

$statement->bindValue(':password',$password);
$statement->bindValue(':password2',$password2);

$statement->execute();
$statement->closeCursor();
return false;

}
 ?>
