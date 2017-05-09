<?php

require('dbconnect.php');
$postaction = filter_input(INPUT_POST, "postaction");
if ($postaction == NULL) {
    $postaction = "homepage";
}
if ($postaction == "homepage") {
    include('login.php');
} else if ($postaction == 'login_action') {
$email = $_COOKIE['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
       $check = getUser($username,$password);
   
    if($check == true)
{

 //$results = getRecords($email); 
    include('home.php');

}else{

 header("Location: login.php?errormsg=1");

}

} else if ($postaction == 'reg_user') {
         $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $fname = filter_input (INPUT_POST, 'fname');
        $lname = filter_input (INPUT_POST, 'lname');
        $number = filter_input (INPUT_POST, 'number');
        $dob = filter_input (INPUT_POST, 'dob');
        $gender = filter_input (INPUT_POST, 'gender');
        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'password2');
        $adduser = addUser($username, $email, $fname, $lname, $number, $dob, $gender, $password, $password2);
        if($adduser == false)
        {
         include("login.php");
        }else{
       echo "Wrong";
        }
        
    
} 
?>
