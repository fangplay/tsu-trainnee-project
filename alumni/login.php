<?php
    /*session_start();

    include("conn.php");
    //$username = $_POST[user];
    //$password = $_POST[user];

    $sql = "SELECT * FROM user WHERE username = '$_POST[user]' AND user_password = '$_POST[user]'";

    $objQuery = mysqli_query($conn,$sql);
    $objResult = mysqli_fetch_array($objQuery);

    if(!$objResult){
        echo "Please Try Again Login";
    }else{
        if($objResult["status"=="admin"]){
            header(location/admin.php);
        }else{
            header(location/user.php);
        }
    }
    mysqli_close($conn);*/
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
                $error = "Username or Password is invalid";
            }
            else
            {
                // Define $username and $password
                $username=$_POST['user'];
                $password=$_POST['pass'];
                // Establishing Connection with Server by passing server_name, user_id and password as a parameter
                $connection = mysqli_connect("localhost","root","");
                // To protect MySQL injection for Security purpose
                $username = stripslashes($username);
                $password = stripslashes($user_password);
                $username = mysql_real_escape_string($username);
                $password = mysql_real_escape_string($password);
                // Selecting Database
                $db = mysqli_select_db("alumni", $connection);
                // SQL query to fetch information of registerd users and finds user match.
                $query = mysqli_query("select * from user where user_password='$password' AND username='$username'", $connection);
                $rows = mysqli_num_rows($query);
                if ($status == "admin") {
                        $_SESSION['login_user']=$username; // Initializing Session
                        header("location: admin.php"); // Redirecting To Other Page
                }
                if ($status == "user"){
                    $_SESSION['login_user']=$username; // Initializing Session
                    header("location: user.php"); // Redirecting To Other Page
                } else {
                        $error = "Username or Password is invalid";
                }
                mysqli_close($connection); // Closing Connection
            }
        }
?>