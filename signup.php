<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'signup');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

$result = mysqli_query($conn, $sql);   

if($result){
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    header("location:dashboard.php");
}else{
    die(mysqli_error($conn));
}

?>  