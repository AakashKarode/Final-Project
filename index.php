<?php
require('model/dbconnect.php');

$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
  $action = "show_login";
}
if ($action == "show_login")
  {
  
    include('login.php');
  }
  
  else if ($action == 'check_user')
  
    {
      $username = $_post['email'];
      $password = $_post['pass'];