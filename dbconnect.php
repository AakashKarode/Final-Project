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

function getUser($username,$password){
global $db;
  $query = 'select * from users where email = :username and password = :password';
 $statement = $db->prepare($query);
  $statement->bindValue(':username',$username);
$statement->bindValue(':password',$password);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

$rowcount=$statement->rowCount();

if($rowcount == 1) {
 setcookie('login',$username);   //email
 $_COOKIE['login'] = $username;
 $email = $result[0]['email'];
 setcookie('email',$email);
 setcookie('islogged',true);
 $_COOKIE['islogged'] = true;
 return true;
 
 }else{


setcookie('login',false);
 unset($_COOKIE['login']);
 setcookie('islogged',false);


 
 return false;
 }
 }


//}

function getRecords($email){
//echo $email;
 global $db;
 $query = 'select * from task where email= :email order by taskdate desc , tasktime desc ';
 $statement = $db-> prepare($query);
 $statement->bindValue(':email',$email);
 $statement->execute();
 $results=$statement->fetchAll();
 $statement->closeCursor();
 return $results;
}

 //}

 ?>
