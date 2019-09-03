<?php
// Get Login Information

$user_name = $_REQUEST['username'];
$password = $_REQUEST['password'];

// Check session
// session_start();

if($user_name === $_SESSION['user_name'] && $password === $_SESSION['password'])  {
    header('Location: home.php');
}
else {
    header('Location: error.php');
}
?>