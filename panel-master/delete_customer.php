<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') 
{

	if($_SESSION['user_status']!='admin'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: user.php');
        exit;

	}
    $user_id = $del_id;

    $db = getDbInstance();
    $db->where('user_id', $user_id);
    $status = $db->delete('user');
    
    if ($status) 
    {
        $_SESSION['info'] = "Customer deleted successfully!";
        header('location: user.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete customer";
    	header('location: user.php');
        exit;

    }
    
}