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
 function addUser($username,$email,$password,$password2){   
 global $db;
 
$query = 'insert into users(email,password,password2,username) values(:email,:password,:password2,:username)';
$statement = $db-> prepare($query);
$statement->bindValue(':username',$username);
$statement->bindValue(':email',$email);

$statement->bindValue(':password',$password);
$statement->bindValue(':password2',$password2);

$statement->execute();
$statement->closeCursor();
return false;

}
 ?>
