<?php 
require_once './config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $remember = filter_input(INPUT_POST, 'remember');
    $password=  md5($password);
   	
    //Get DB instance. function is defined in config.php
    $db = getDbInstance();

    $db->where ("username", $username);
    $db->where ("user_password", $password);
    $row = $db->get('alumni');
     
    if ($db->count >= 1) {
        $_SESSION['user_logged_in'] = TRUE;
        $_SESSION['user_status'] = $row[0]['user_status'];
       	if($remember)
       	{
       		setcookie('username',$username , time() + (86400 * 90), "/");
       		setcookie('user_password',$password , time() + (86400 * 90), "/");
       	}
        header('Location:index.php');
        exit;
    } else {
        $_SESSION['login_failure'] = "Invalid user name or password";
        header('Location:login.php');
        exit;
    }
  
}