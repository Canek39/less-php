<?php
session_start();
include_once('db.php');
$salt = "sldfjsklfdj23lfd0,.sd";

$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
$pass = $_POST['password'] ? strip_tags($_POST['password']) : "";
$pass = $salt.md5($pass).$salt;

$sql = "select login from users where login = '$login'";
$res = mysqli_query($connect, $sql);

if(!mysqli_num_rows($res)){
    $sql = "INSERT INTO users(`id`, `login`, `password`, `role`) VALUES (NULL, '$login', '$pass', 0)";
    $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
    $sql2 = "select id from users where login = $login";
    $res2 = mysqli_query($connect,$sql2);
    $data = mysqli_fetch_assoc($res2);

    if($res && $res2){
        $_SESSION['userid'] = $data['id'];
        $_SESSION['login'] = $login;
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['role'] = $data['role'];
        header('Location: profile.php');
    }else{
        header('Location: registration.php?success=false');
    }
}else{
    header('Location: registration.php?success=false');
}
?>